<?php

namespace Database\Migrations;

use Core\Abstractions\Migration;
use Core\Database\Query\Facades\Schema;
use Core\Database\Query\Table\TableBuilder;

final class CreateUsersTable implements Migration
{
    private const USERS_TABLE = 'users';

    public static function up(): void
    {
        Schema::create(self::USERS_TABLE, function (TableBuilder $table) {
            $table->id()->unique()->notNull()->autoIncrement();
            $table->varchar('name', 255)->notNull();
            $table->varchar('email', 255)->unique()->notNull();
            $table->varchar('password', 255)->notNull();
            $table->timestamp('verified_at');
            $table->timeStamp('created_at')->notNull();
            $table->timeStamp('updated_at');
            return $table;
        });
    }

    public static function down(): void
    {
        Schema::drop(self::USERS_TABLE);
    }
}
