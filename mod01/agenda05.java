/*
	Escola: ETEC
	Curso: Técnico em Desenvolvimento de Sistemas
	Matéria: Desenvolvimento de Sistemas I
	Agenda: 05
	
	Atividade: Classificação de Prioridade
	
	A empresa NewInfo está desenvolvendo um sistema para classificar a prioridade na fila de espera de atendimento de
	um de seus clientes.
	
	O Estatuto do Idoso classifica o atendimento de pessoas idosas, assegurando o direito de fila prioritária às
	pessoas com 60 anos ou mais.
	A lei n. 13.466 de 12/07/2017, insere ainda Artigo 2º, inciso 2 que diz que “dentre os idosos, é assegurada
	prioridade especial aos maiores de 80 anos, atendendo-se suas necessidades sempre preferencialmente em relação
	aos demais idosos.”
	
	Atendendo ao Estatuto, escreva um programa que solicite a idade do usuário a ser atendido a fim de encaminhá-lo
	para a fila comum, se a idade for menor que 60 anos, para a fila prioritária, se a idade tiver 60 anos ou mais e
	para a “fila 80+”, se a idade for maior que 80 anos. Apresente a resposta com a codificação em linguagem de
	programação Java.
*/

package agenda05;

import java.util.Scanner;
public class agenda05 {

	public static void main(String[] args) {
		
		//Declaração de variáveis
		int idade;
		Scanner leitor = new Scanner(System.in);
		
		//Entrada de dados
		System.out.println("Por favor, insira a sua idade: ");
		idade = leitor.nextInt();
		
		//Decisão e saída de dados
		if (idade >= 80) {
			System.out.println("Por favor, siga para a fila 80+.");
		} 
		else if (idade >= 60 && idade < 80) {
			System.out.println("Por favor, siga para a fila prioritária.");
		}
		else {
			System.out.println("Por favor, siga para a fila comum.");
		}
		//Scanner.close();
	}
}
