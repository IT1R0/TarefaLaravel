<?php 

namespace App\Http\Controllers; 
class Usercontroller extends Controller 

{ 
    public function usuario($name, $lastname) 
    {  
        return view('usuario')->with('name', $name)->with('lastname', $lastname); 
    } 

    public function contas($operacao, $num1, $num2) 
    { 
        $resultado = 0; 
        switch ($operacao) { 
            case 'soma': 
                $resultado = $num1 + $num2; 
                break; 

            case 'subtracao': 
                $resultado = $num1 - $num2; 
                break; 

            case 'multiplicacao': 
                $resultado = $num1 * $num2; 
                break; 

            case 'divisao': 
                $resultado = $num2 != 0 ? $num1 / $num2 : 'Divisão por zero'; 
                break; 
        } 

        return view('contas')->with('operacao', $operacao)->with('num1', $num1)->with('num2', $num2)->with('resultado', $resultado); 
    }  

 

    public function listaProdutos() 

    { 
        $produtos = [ 

            ['descricao' => 'Kit Cubo magico', 'categoria' => 'Brinquedo', 'preco' => 120], 

            ['descricao' => 'Mesa Digitalizadora huilon', 'categoria' => 'Aparelho', 'preco' => 110], 

            ['descricao' => 'Batbeg', 'categoria' => 'Brinquedo', 'preco' => 15], 

            ['descricao' => 'Canetas a base de alcool', 'categoria' => 'Material', 'preco' => 11], 

            ['descricao' => 'Borracha 2 em 1', 'categoria' => 'Material', 'preco' => 10], 

            ['descricao' => 'Controle wireless T7', 'categoria' => 'Aparelho', 'preco' => 150], 

            // Adicione mais produtos conforme necessário 

        ]; 

 

        return view('listaProdutos', ['produtos' => $produtos]); 

    } 
    
    public function aluno($nome, $sobrenome, $idade, $rm, $genero, $endereco) 
    {  
        return view('aluno')->with('nome', $nome)->with('sobrenome', $sobrenome)->with('idade', $idade)->with('rm', $rm)->with('genero', $genero)->with('endereco', $endereco); 
    } 
} 