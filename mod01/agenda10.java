/*
    Escola: ETEC
    Curso: Técnico em Desenvolvimento de Sistemas
    Matéria: Desenvolvimento de Sistemas I
    Agenda: 10

    Atividade:
    Paulo, o estudante do Ensino Médio que você conheceu no Mergulhando no Tema, agora deseja criar um programa que
    realize a soma de todos os elementos de uma matriz 5x5, contendo números inteiros. Elabore a codificação em
    linguagem Java de um software que resolva o problema de Paulo.

    IMPORTANTE: O programa deverá solicitar a digitação dos valores e armazenar numa matriz 5x5.
*/

import javax.swing.JOptionPane;
import java.util.Random;

public class agenda10 {

    public static void main(String[] args) {
        int[][] matriz = new int[5][5];
        String exibir = "";

        // Gera números aleatórios de 0 a 10 e armazena na matriz
        Random random = new Random();
        for (int linha = 0; linha < matriz.length; linha++) {
            for (int coluna = 0; coluna < matriz[linha].length; coluna++) {
                matriz[linha][coluna] = random.nextInt(11);
            }
        }


//        // Solicita a digitação dos valores e armazena na matriz
//        for (int linha = 0; linha < matriz.length; linha++) {
//            for (int coluna = 0; coluna < matriz[linha].length; coluna++) {
//                String valorStr = JOptionPane.showInputDialog("Digite o valor da posição [" + linha + "][" + coluna + "]:");
//                int valor = Integer.parseInt(valorStr);
//                matriz[linha][coluna] = valor;
//            }
//        }


        // Concatena os elementos da matriz em uma string e exibe na tela
        for (int linha = 0; linha < matriz.length; linha++) {
            for (int coluna = 0; coluna < matriz[linha].length; coluna++) {
                exibir += matriz[linha][coluna] + " | ";
            }
            exibir += "\n"; // pula para a próxima linha
        }

        // Exibe a matriz em uma caixa de diálogo de mensagem
        JOptionPane.showMessageDialog(null, exibir);


        // Realiza a soma de todos os elementos da matriz
        int soma = 0;
        for (int linha = 0; linha < matriz.length; linha++) {
            for (int coluna = 0; coluna < matriz[linha].length; coluna++) {
                soma += matriz[linha][coluna];
            }
        }

        // Exibe o resultado da soma
        JOptionPane.showMessageDialog(null, "A soma de todos os elementos da matriz é: " + soma);
    }
}

// AVISOS:
// - Caso vá usar a inserção manual dos números, desabilite o trecho que gera os números automáticos
// - Caso vá usar o gerador de núméros aleatórios, comente o trecho que pede para o usuário inserir os números de
// forma manual
// - Selecione o trecho do código e use o atalho Ctrl + /, para comentar e descomentar
// Também é possível exibir e somar na mesma estrutura de repetição, mas deixei separado para ficar mais fácil de
// entender a estrutura.