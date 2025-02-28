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
        Schema::create('commandes', function (Blueprint $table) {
                $table->id();
                $table->string('nom', 50); 
                $table->integer('quantite');  
                $table->string('informations_sup', 50);    
                $table->timestamps(); 
            
                
        });
        Schema::table('commandes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_produit');
            $table->foreign('id_produit')->references('id')->on('produits');
           });
           
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commandes', function (Blueprint $table) {
            //
        });
    }
};
