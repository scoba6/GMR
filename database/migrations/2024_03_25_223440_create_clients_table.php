<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->enum('titclt', ['M', 'Mme', 'St']);
			$table->string('rsnclt')->nullable(false);
			$table->string('telclt')->nullable();
			$table->string('maiclt')->nullable();
			$table->string('adrclt')->nullable();
			$table->string('cptaux')->nullable();
			$table->foreignId('agence_id')->constrained('agences');
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
