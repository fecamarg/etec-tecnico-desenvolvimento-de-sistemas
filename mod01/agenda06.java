/*
    Escola: ETEC
    Curso: Técnico em Desenvolvimento de Sistemas
    Matéria: Desenvolvimento de Sistemas I
    Agenda: 06
    
    Atividade: Controle IPVA
    
    O escritório de Despachante Vale Card é uma empresa especializada em documentação de veículos atuando diretamente
    com os órgãos de trânsito. Entre suas atividades, está informar para seus clientes o mês de vencimento do IPVA de 
    seus veículos. Para isso, o cliente fornece o número final da placa do veículo, em seguida deve ser apresentado o 
    mês que o IPVA deve ser pago, conforme tabela a seguir:
    
    Placa Final 1: Pagamento até 30/04
    Placa Final 2: Pagamento até 31/05    
    Placa Final 3: Pagamento até 30/06    
    Placa Final 4: Pagamento até 31/07    
    Placa Final 5: Pagamento até 31/08    
    Placa Final 6: Pagamento até 30/09    
    Placa Final 7: Pagamento até 31/10    
    Placa Final 8: Pagamento até 30/11    
    Placa Final 9 ou 0: Pagamento até 31/12
*/

import javax.swing.*;
public class agenda06 {
    public static void main(String[] args) {
        int placa;

        JOptionPane.showMessageDialog(null, "Bem vindo ao Despachante Vale Card.\n");
        placa = Integer.parseInt(JOptionPane.showInputDialog("Para saber a data de vencimento do IPVA do seu veículo, digite o número final de sua placa: "));

        switch (placa) {
            case 0:
               JOptionPane.showMessageDialog(null, "O pagamento deverá ser efetuado até o dia 31/12.\n");
               break;
            case 1:
                JOptionPane.showMessageDialog(null, "O pagamento deverá ser efetuado até o dia 30/04.\n");
                break;
            case 2:
                JOptionPane.showMessageDialog(null, "O pagamento deverá ser efetuado até o dia 31/05.\n");
                break;
            case 3:
                JOptionPane.showMessageDialog(null, "O pagamento deverá ser efetuado até o dia 30/06.\n");
                break;
            case 4:
                JOptionPane.showMessageDialog(null, "O pagamento deverá ser efetuado até o dia 31/07.\n");
                break;
            case 5:
                JOptionPane.showMessageDialog(null, "O pagamento deverá ser efetuado até o dia 31/08.\n");
                break;
            case 6:
                JOptionPane.showMessageDialog(null, "O pagamento deverá ser efetuado até o dia 30/09.\n");
                break;
            case 7:
                JOptionPane.showMessageDialog(null, "O pagamento deverá ser efetuado até o dia 31/10.\n");
                break;
            case 8:
                JOptionPane.showMessageDialog(null, "O pagamento deverá ser efetuado até o dia 30/11.\n");
                break;
            case 9:
                JOptionPane.showMessageDialog(null, "O pagamento deverá ser efetuado até o dia 31/12.");
                break;
            default:
                JOptionPane.showMessageDialog(null, "Valor inválido.\n\nPor favor, tente novamente.");
                break;
        }
        JOptionPane.showMessageDialog(null, "Obrigado por usar nosso sistema, o Despachante Vale Card agradece a preferência.");
    }
}