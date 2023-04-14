/*
    Escola: ETEC
    Curso: Técnico em Desenvolvimento de Sistemas
    Matéria: Desenvolvimento de Sistemas I
    Agenda: 07
    
    Atividade: Cadastro de Produtos e Preços com Descontos
    
    A Padaria de Joaquim faz aniversário na semana que vem e ele e sua família decidiram que, além de fazer a 
    tradicional comemoração, irão selecionar 10 produtos na padaria para fazer a promoção da semana de 50% desses 
    produtos.
    
    Escreva um programa em Java, solicitando a entrada de 10 produtos da padaria
    (nome e valor do produto) e exiba na tela o nome do produto e seu respectivo valor com 50% de
    desconto.
*/

import javax.swing.*;
public class agenda07 { 
    public static void main(String[] args) {

        int qtdProdutos = 10;
        int i; //contador
        String produto;
        double valor;

        //  Começa na contagem 1; a contagem vai até 10, deixei 1 para testar, mas é só alterar; aumenta o contador
        for(i=1;i<=qtdProdutos;i++) {
            // JOptionPane.showInputDialog mostra o input que é a entrada na tela, e recebendo, já atribui a variável definida
            produto=JOptionPane.showInputDialog("Digite o nome do produto " + i + ":");
            //
            valor=Double.parseDouble(JOptionPane.showInputDialog("Digite o valor do produto " + i + ":"));
            // Para calcular porcentagem no Java tem que multiplicar pela quantidade e depois dividir por 100, que é o total. 50 por 100, no caso.
            double valorPromocao = (valor*50) / 100;
            System.out.println("O produto " + i + ": " + produto + " custava R$" + valor + ", e agora na promoção, com 50% de desconto, custa apenas R$" + valorPromocao + ".");
        }
    }
}

//Obs. Se inserir letra ou usar vírgula no lugar do input, o programa da erro.