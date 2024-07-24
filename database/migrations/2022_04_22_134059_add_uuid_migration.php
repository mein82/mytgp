<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUuidMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public const MODEL_CLASSES = [];
    public const UUID_FIELD = 'uuid';
    public const UUID_FIELD_AFTER = 'id';
    public const UUID_UPSERT = true;

    public function up(): void
    {
        foreach (static::MODEL_CLASSES as $classname) {
            /** @var Model $model */
            $model = new $classname;

            Schema::table($model->getTable(), function (Blueprint $table) {
                $col = $table->uuid(static::UUID_FIELD)->after(static::UUID_FIELD_AFTER)->index();

                if (static::UUID_UPSERT) {
                    $col->nullable();
                }
            });

            if (static::UUID_UPSERT) {
                $query = $model->newQuery();

                if (method_exists($query, 'withTrashed')) {
                    $query->withTrashed();
                }

                $query->chunk(1000, function (Collection $chunk) {
                    $chunk->each(function (Model $model) {
                        $model->uuid = Str::uuid();
                        $model->save();
                    });
                });

                Schema::table($model->getTable(), function (Blueprint $table) {
                    $table->uuid(static::UUID_FIELD)->after(static::UUID_FIELD_AFTER)->nullable(false)->change();
                });
            }
        }
    }

    public function down(): void
    {
        foreach (self::MODEL_CLASSES as $classname) {
            /** @var Model $model */
            $model = new $classname;

            Schema::table($model->getTable(), function (Blueprint $table) {
                $table->dropColumn(static::UUID_FIELD);
            });
        }
    }
}
