/**
 * ED8
 *
 * @author Davi Cunha
 * @version 01
 */

import IO.*;


public class ED8 {
    public static int[] lerDoArquivo(String nome) {
        FILE arquivo = new FILE(FILE.INPUT, nome);
        int tamanho;
        int x;
        int[] tabela = null;
        String linha;
        IO.println("Montar arranjo com valores lidos de arquivo");
        linha = arquivo.readln();// testar a disponibilidade de dados
        if (linha == null) {
            IO.println("ERRO: Nao ha' dados no arquivo.");
        } else {
            tamanho = IO.getint(linha);
            if (tamanho <= 0) {
                IO.println("ERRO: Tamanho invalido.");
            } else {
                tabela = new int[tamanho];
                for (x = 0; x < tamanho; x = x + 1) {
                    linha = arquivo.readln();
                    tabela[x] = IO.getint(linha);
                }
            }
        }
        arquivo.close();
        return (tabela);
    }

    public static void teste01() {
        int[] tabela = null;
        IO.println();
        IO.println("Recuperar dados de arquivo");
        IO.println();
        tabela = lerDoArquivo("DADOS.TXT");
        if (tabela == null) {
            IO.println("ERRO: Arranjo nulo.");
        } else {
            if (tabela.length == 0) {
                IO.println("ERRO: Arranjo vazio.");
            } else {
                IO.println("Arranjo montado com " +
                        tabela.length + " dados.");
            }
        }
        IO.println();
        IO.pause("Apertar ENTER para continuar.");
    }

    public static void main(String[] args) {
        IO.println("EXEMPLO0141 - Programa em Java");
        IO.println("Autor: ________________________");
        teste01();

        IO.pause("Apertar ENTER para terminar.");
    }
}