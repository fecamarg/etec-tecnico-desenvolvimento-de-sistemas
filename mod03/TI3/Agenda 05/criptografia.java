import javax.swing.JOptionPane;

//    Comentário explicativo:
//    Neste código, a conversão de um caractere para um valor da tabela ASCII é realizada através de um cast explícito 
//    de char para int. Isso é feito para obter o valor numérico correspondente ao caractere na tabela ASCII. 
//    Por exemplo, (int) c converte o caractere c para seu valor numérico ASCII. 
//    Da mesma forma, para converter um valor numérico ASCII de volta para um caractere, usamos um cast explícito 
//    de int para char, como em (char) valorAscii. Isso é útil para manipular caracteres como números, permitindo 
//    operações matemáticas e, em seguida, convertendo os resultados de volta para caracteres   

public class criptografia {

    public static void main(String[] args) {
        int opcao = exibirMenu();

        while (opcao != 3) {
            switch (opcao) {
                case 1:
                    criptografarTexto();
                    break;
                case 2:
                    descriptografarTexto();
                    break;
                default:
                    JOptionPane.showMessageDialog(null, "Opção inválida. Tente novamente.");
            }

            opcao = exibirMenu();
        }

        JOptionPane.showMessageDialog(null, "Obrigado por utilizar o programa. Até mais!");
    }

    // Método para exibir o menu e obter a opção do usuário
    private static int exibirMenu() {
        int opcao;

        try {
            String input = JOptionPane.showInputDialog("Escolha uma opção:\n1 - Criptografar\n2 - Descriptografar\n3 - Sair");
            if (input == null) { // Verifica se o usuário clicou em Cancelar
                opcao = 3; // Define opção como 3 (Sair)
            } else {
                opcao = Integer.parseInt(input);
            }
        } catch (NumberFormatException e) {
            opcao = 0; // Define opção como 0 para tratar o valor inválido
        }

        return opcao;
    }
    
    // Método para criptografar o texto inserido pelo usuário
    private static void criptografarTexto() {
        String mensagem = JOptionPane.showInputDialog("Digite a mensagem para criptografar:");
        StringBuilder mensagemCriptografada = new StringBuilder();
        StringBuilder sequenciaValoresAscii = new StringBuilder();
        StringBuilder novosValoresAscii = new StringBuilder();

        // Iterar sobre cada caractere da mensagem
        for (char c : mensagem.toCharArray()) {
            // Obter o valor ASCII original do caractere e adicionar ao StringBuilder
            int valorAsciiOriginal = (int) c;
            sequenciaValoresAscii.append(valorAsciiOriginal).append(" ");
        }

        // Exibir a sequência de valores ASCII originais
        JOptionPane.showMessageDialog(null, sequenciaValoresAscii.toString(), "Valores ASCII originais", JOptionPane.INFORMATION_MESSAGE);

        // Iterar novamente sobre cada caractere da mensagem para criptografar
        for (char c : mensagem.toCharArray()) {
            // Obter o valor ASCII original do caractere
            int valorAsciiOriginal = (int) c;
            // Adicionar "+ 10" para criptografar e adicionar ao StringBuilder
            int valorAsciiCriptografado = valorAsciiOriginal + 10;
            novosValoresAscii.append(valorAsciiCriptografado).append(" ");
        }

        // Exibir os novos valores ASCII após a criptografia
        JOptionPane.showMessageDialog(null, novosValoresAscii.toString(), "Novos valores ASCII", JOptionPane.INFORMATION_MESSAGE);

        // Iterar novamente sobre cada caractere da mensagem para criptografar
        for (char c : mensagem.toCharArray()) {
            // Obter o valor ASCII original do caractere
            int valorAsciiOriginal = (int) c;
            // Adicionar "+ 10" para criptografar e adicionar o caractere criptografado ao StringBuilder
            int valorAsciiCriptografado = valorAsciiOriginal + 10;
            mensagemCriptografada.append((char) valorAsciiCriptografado).append(" ");
        }

        // Exibir a mensagem criptografada
        JOptionPane.showMessageDialog(null, "Mensagem criptografada: " + mensagemCriptografada.toString(), "Mensagem criptografada", JOptionPane.INFORMATION_MESSAGE);
    }

    // Método para descriptografar o texto inserido pelo usuário
    private static void descriptografarTexto() {
        String mensagemCriptografada = JOptionPane.showInputDialog("Digite a mensagem criptografada:");
        StringBuilder mensagemDescriptografada = new StringBuilder();
        StringBuilder sequenciaValoresAscii = new StringBuilder();
        StringBuilder valoresAsciiDescriptografados = new StringBuilder();

        for (char c : mensagemCriptografada.toCharArray()) {
            // Ignorar os espaços durante a descriptografia
            if (c != ' ') {
                // Obter o valor ASCII criptografado do caractere
                int valorAsciiCriptografado = (int) c;
                sequenciaValoresAscii.append(valorAsciiCriptografado).append(" ");
            }
        }

        // Exibir a sequência de valores ASCII criptografados
        JOptionPane.showMessageDialog(null, sequenciaValoresAscii.toString(), "Valores ASCII criptografados", JOptionPane.INFORMATION_MESSAGE);

        for (char c : mensagemCriptografada.toCharArray()) {
            // Ignorar os espaços durante a descriptografia
            if (c != ' ') {
                // Obter o valor ASCII criptografado do caractere
                int valorAsciiCriptografado = (int) c;
                // Subtrair 10 para descriptografar
                int valorAsciiDescriptografado = valorAsciiCriptografado - 10;
                // Certificar-se de que o valor descriptografado permaneça dentro do intervalo ASCII imprimível
                if (valorAsciiDescriptografado < 32) {
                    valorAsciiDescriptografado += 95;
                }
                // Adicionar o caractere descriptografado à mensagem descriptografada
                mensagemDescriptografada.append((char) valorAsciiDescriptografado);
                valoresAsciiDescriptografados.append(valorAsciiDescriptografado).append(" ");
            }
        }

        // Exibir os valores ASCII descriptografados
        JOptionPane.showMessageDialog(null, valoresAsciiDescriptografados.toString(), "Valores ASCII descriptografados", JOptionPane.INFORMATION_MESSAGE);

        // Exibir a mensagem descriptografada
        JOptionPane.showMessageDialog(null, "Mensagem descriptografada: " + mensagemDescriptografada.toString(), "Mensagem descriptografada", JOptionPane.INFORMATION_MESSAGE);
    }
}
