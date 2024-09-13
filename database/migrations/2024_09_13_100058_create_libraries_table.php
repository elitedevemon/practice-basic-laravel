<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('libraries', function (Blueprint $table) {
      $table->id();
      $table->string('book_name');
      $table->dateTime('issue_date');
      $table->boolean('status')->default(true);
      $table->unsignedBigInteger('student_id');
      $table->foreign('student_id')->references('id')->on('students')->cascadeOnUpdate()->cascadeOnDelete();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('libraries');
  }
};
