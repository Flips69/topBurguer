<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lanches = [
            [
                'nome' => "Incendiary Burguer",
                'preco' => 32.99,
                'ingredientes' => 'Ingredientes: Pão brioche, 2 hambúrgueres de carne bovina(150g), alface, cheddar, bacon e molho de pimenta',
                'imagem' => 'images/burguer1.png'
            ],
            [
                'nome' => "Hunters Fury",
                'preco' => 36.59,
                'ingredientes' => 'Ingredientes: Pão australiano, 2 hambúrgueres de carne bovina(150g), alface, tomate, cebola caramelizada, cheddar, ovo frito e bacon',
                'imagem' => 'images/burguer2.png'
            ],
            [
                'nome' => "Viper's Pit",
                'preco' => 32.99,
                'ingredientes' => 'Ingredientes: Pão brioche verde, 1 hambúrguer de carne bovina(200g), tomate, mussarela, cheddar e bacon',
                'imagem' => 'images/burguer3.png'
            ],
            [
                'nome' => "Empress",
                'preco' => 30.99,
                'ingredientes' => 'Ingredientes: Pão brioche rosa, 1 hambúrguer de carne bovina ou toscana(150g), abacate, cebola roxa, tomate, mussarela e maionese de bacon',
                'imagem' => 'images/burguer4.png'
            ],
            [
                'nome' => "Rolling Thunder",
                'preco' => 41.99,
                'ingredientes' => 'Ingredientes: Pão brioche, 3 hambúrgueres de carne bovina(150g), bacon, cheddar e molho verde',
                'imagem' => 'images/burguer5.png'
            ],
            [
                'nome' => "From the Shadow",
                'preco' => 30.99,
                'ingredientes' => 'Ingredientes: Pão brioche preto, 2 hambúrgueres de carne bovina(150g), bacon, alface, tomate, picles, cebola roxa, maionese de bacon e cheddar',
                'imagem' => 'images/burguer6.png'
            ],
            [
                'nome' => "Showstopper",
                'preco' => 27.99,
                'ingredientes' => 'Ingredientes: Pão brioche vermelho, 1 hambúrguer de carne bovina (200g), cebola empanada, cheddar, alface, tomate e bacon',
                'imagem' => 'images/burguer7.png'
            ],
            [
                'nome' => "Seekers",
                'preco' => 26.99,
                'ingredientes' => 'Ingredientes: Pão brioche, frango empanado, anéis de cebola, maionese de bacon e molho especial',
                'imagem' => 'images/burguer8.png'
            ],
            [
                'nome' => "Blade Storm",
                'preco' => 28.99,
                'ingredientes' => 'Ingredientes: Pão brioche azul, 2 hambúrgueres de carne bovina(150g), cebola caramelizada, cheddar, picles e bacon',
                'imagem' => 'images/burguer9.png'
            ],
            [
                'nome' => "Nebula",
                'preco' => 29.99,
                'ingredientes' => 'Ingredientes: Pão colorido, 1 hambúrguer de carne bovina(150g), 3 linguiças, cheddar, picles e cebola caramelizada',
                'imagem' => 'images/burguer10.png'
            ],
            [
                'nome' => "Tour de Force",
                'preco' => 21.99,
                'ingredientes' => 'Ingredientes: Pão de forma, 2 ovos fritos, presunto(200g), mostarda dijon e queijo gruyère',
                'imagem' => 'images/burguer11.png'
            ],
            [
                'nome' => "Nightfall",
                'preco' => 23.99,
                'ingredientes' => 'Ingredientes: Pão turco(Ramazin Pidesi), carne desfiada(400g), alface, cebola, tomate e batata frita',
                'imagem' => 'images/burguer12.png'
            ],
            [
                'nome' => "Annihilation",
                'preco' => 41.99,
                'ingredientes' => 'Ingredientes: Pão brioche, 3 hambúrgueres de carne bovina(200g), bacon, tomate, alface, cheddar, 2 ovos fritos e cebola caramelizada',
                'imagem' => 'images/burguer13.png'
            ],
            [
                'nome' => "Owl Burguer",
                'preco' => 28.99,
                'ingredientes' => 'Hambúrguer de carne, bacon, queijo, alface, tomate e pão.Ingredientes: Pão brioche, frango empanado, cebola roxa, picles, molho especial e bacon',
                'imagem' => 'images/burguer14.png'
            ],
            [
                'nome' => "JoyZe(Combo Casal)",
                'preco' => 51.99,
                'ingredientes' => 'Ingredientes: 2 Lanches do cardápio a sua escolha(Exceto os lanches com 3 hambúrgueres), de acompanhamento uma porção média de batata frita com cheddar e bacon',
                'imagem' => 'images/burguer15.png'
            ]
        ];

        foreach($lanches as $lanche){
            DB::table('produtos')->insert([
                'nome' => $lanche['nome'],
                'preco' => $lanche['preco'],
                'ingredientes' => $lanche['ingredientes'],
                'imagem' => $lanche['imagem'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
