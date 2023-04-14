/*
    Escola: ETEC
    Curso: Técnico em Desenvolvimento de Sistemas
    Matéria: Desenvolvimento de Sistemas I
    Agenda: 08 - Extra

    Atividade: Tabuada do 6 ao 10
    
    Na Agenda 7, você realizou este exercício com a Estrutura de Repetição PARA (for). Agora, realize com a Estrutura 
    de Repetição: while ou do while (você pode escolher).
    Giovanna adora usar computador, navegar na internet e matemática. Ela decidiu estudar tabuada devido a sua
    dificuldade durante o período de aula (ela apenas sabe as tabuadas dos números 0 até 05). Ao navegar na internet,
    aprendeu a desenvolver alguns algoritmos e decidiu desenvolver algo para ajudá-la em seus estudos com tabuada.
    Escreva para Giovanna um Algoritmo e um Programa em Java da Tabuada dos números 6 até 10.
 */

import javax.swing.*;
public class agenda08_extra {
    public static void main(String[] args) {
        int i = 6; // A tabuada começa no 6, então o contador inicia no 6, e o limite é até 10.
        while (i <= 10) {
            System.out.println("\nTabuada do " + i + ":");
            int j = 1;
            while (j <= 10) {
                int resultado = i * j;
                System.out.println(i + " x " + j + " = " + resultado);
                j++;
            }
            i++;
        }
    }
}
