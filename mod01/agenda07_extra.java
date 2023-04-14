/*
    Escola: ETEC
    Curso: Técnico em Desenvolvimento de Sistemas
    Matéria: Desenvolvimento de Sistemas I
    Agenda: 07 - Extra

    Atividade: Tabuada do 6 ao 10
    
    Escreva um Programa em Java da Tabuada dos números 6 até 10.
*/
public class agenda07_extra { 
    public static void main(String[] args) {

        // 6 7 8 9 10
        // para uma variável que inicia em 1, e vai até 10, mudando 1-por-1, faça:

        for (int i = 6; i <= 10; i++) {
            for (int j = 1; j <= 10; j++)
                System.out.println(j + " x " + i + " = " + j * i);
            System.out.println("\n");
        }
    }
}