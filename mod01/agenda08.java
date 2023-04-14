/*
    Escola: ETEC
    Curso: Técnico em Desenvolvimento de Sistemas
    Matéria: Desenvolvimento de Sistemas I
    Agenda: 08

    Atividade: Avaliação do Cinema
    
    Um cinema possui capacidade de 40 lugares e está sempre com ocupação total. Certo dia, cada espectador respondeu a
    um questionário, no qual constava:
    
    - idade;
    - opinião em relação ao filme, segundo as seguintes notas:
    A - Ótimo /  B - Bom / C - Regular  / D - Ruim  / E -  Péssimo.
    
    Elabore a codificação em JAVA para que leia os dados, calcule e exiba na tela:
    - a quantidade de respostas "ótimo";
    - a média de idade das pessoas que responderam "ruim";
    - a porcentagem de respostas "péssimo".
*/

import javax.swing.*;
public class agenda08 { 
    public static void main(String[] args) {

        int ocupacaoCinema=3, contador = 1, opcao = 0, idadeRuim = 0, somaIdade = 0;
        int qtdOtimo = 0, qtdBom = 0, qtdRegular = 0, qtdRuim = 0;
        double mediaIdadeRuim = 0.0, qtdPessimo = 0.0, porcentagemPessimo = 0.0;

        //O cinema tem capacidade para 40 pessoas
        while (contador <= ocupacaoCinema) {
            opcao = Integer.parseInt(JOptionPane.showInputDialog("Por favor, digite a opção da sua avaliação:\n\n"
                    + "1. Ótimo\n"
                    + "2. Bom\n"
                    + "3. Regular\n"
                    + "4. Ruim\n"
                    + "5. Péssimo\n\n"));

            switch (opcao) {
                case 1: //Ótimo
                    JOptionPane.showMessageDialog(null, "Obrigado pela avaliação!");
                    qtdOtimo = qtdOtimo + 1;
                    break;
                case 2: //Bom
                    JOptionPane.showMessageDialog(null, "Obrigado pela avaliação!");
                    qtdBom = qtdBom + 1;
                    break;
                case 3: //Regular
                    JOptionPane.showMessageDialog(null, "Obrigado pela avaliação!");
                    qtdRegular = qtdRegular + 1;
                    break;
                case 4: //Ruim
                    idadeRuim = Integer.parseInt(JOptionPane.showInputDialog("Por favor, digite a sua idade: "));
                    JOptionPane.showMessageDialog(null, "Obrigado pela avaliação!");
                    qtdRuim = qtdRuim + 1;
                    somaIdade = somaIdade + idadeRuim;
                    break;
                case 5: //Péssimo
                    JOptionPane.showMessageDialog(null, "Obrigado pela avaliação!");
                    qtdPessimo = qtdPessimo + 1;
                    break;

                default: //Nenhuma das opções
                    JOptionPane.showMessageDialog(null, "Opção inválida.");
                    break;
            }
            contador = contador + 1;
        }
        mediaIdadeRuim = somaIdade / qtdRuim;
        porcentagemPessimo = (qtdPessimo / ocupacaoCinema) * 100;

        JOptionPane.showMessageDialog(null, "Tivemos o total de " + qtdOtimo + " avaliação(ões) como 'Ótimo'.");
        JOptionPane.showMessageDialog(null, "A média de idade das pessoas que avaliaram como 'Ruim' foi de " + mediaIdadeRuim + ".");
        JOptionPane.showMessageDialog(null, "A porcentagem de avaliações como 'Péssimo' foi de " + porcentagemPessimo + "%");
    }
}

