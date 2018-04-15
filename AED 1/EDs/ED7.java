/**
 * ED7
 *
 * @author
 * @version 01
 */

import IO.*;

public class ED7 {
    public static void metodo01() {
        int n;
        int k;
        String dado;
        FILE arquivo;

        IO.println("Guardar dados em arquivos");
        n = IO.readint("Quantos nomes? ");
        if (n <= 0) {
            IO.println("ERRO: Quantidade invalida.");
        } else {
            arquivo = new FILE(FILE.OUTPUT, "DADOS1.TXT");
            arquivo.println("" + n);
            for (k = 1; k <= n; k = k + 1) {
                dado = IO.readString("Nome = ");
                arquivo.println("" + dado);
            }
            arquivo.close();
        }
        IO.println();
        IO.pause("Apertar ENTER para continuar.");
    }

    public static void metodo02() {
        String linha;
        FILE arquivo;
        IO.println("Consultar dados em arquivos");
        arquivo = new FILE(FILE.INPUT, "DADOS1.TXT");
        linha = arquivo.readln();
        while (!arquivo.eof()) {
            IO.println("" + linha);
            linha = arquivo.readln();
        }
        arquivo.close();
        IO.println();
        IO.pause("Apertar ENTER para continuar.");
    }

    public static void metodo03() {
        int n, k;
        String linha;
        FILE arquivo;
        IO.println("Consultar dados em arquivos");
        arquivo = new FILE(FILE.INPUT, "DADOS1.TXT");
        linha = arquivo.readln();
        n = IO.getint(linha);
        if (n <= 0) {
            IO.println("ERRO: Quantidade invalida.");
        } else {
            IO.println("Quantidade de dados = " + n);
            for (k = 1; k <= n; k = k + 1) {
                linha = arquivo.readln();
                IO.println("" + linha);
            }
            arquivo.close();
        }
        IO.println();
        IO.pause("Apertar ENTER para continuar.");
    }

    public static void metodo04() {
        int n, k, dado;
        FILE arquivo;
        IO.println("Guardar dados inteiros em arquivos");
        n = IO.readint("Fornecer a quantidade de valores: ");
        if (n <= 0) {
            IO.println("ERRO: Quantidade invalida.");
        } else {
            arquivo = new FILE(FILE.OUTPUT, "DADOS2.TXT");
            arquivo.println("" + n);
            for (k = 1; k <= n; k = k + 1) {
                dado = IO.readint("Dado = ");
                arquivo.println("" + dado);
            }
            arquivo.close();
        }
        IO.println();
        IO.pause("Apertar ENTER para continuar.");
    }

    public static void metodo05() {
        int n, k, dado;
        String linha;
        FILE arquivo;
        IO.println();
        IO.println("Consultar dados em arquivos");
        IO.println();
        arquivo = new FILE(FILE.INPUT, "DADOS2.TXT");
        linha = arquivo.readln();
        n = IO.getint(linha);
        if (n <= 0) {
            IO.println("ERRO: Quantidade invalida.");
        } else {
            IO.println("Quantidade de dados = " + n);
            for (k = 1; k <= n; k = k + 1) {
                linha = arquivo.readln();
                dado = IO.getint(linha);
                IO.println("" + dado);
            }
            arquivo.close();
        }
        IO.println();
        IO.pause("Apertar ENTER para continuar.");
    }

    public static void metodo06() {
        int n, k;
        double dado;
        FILE arquivo;
        IO.println("Guardar dados reais em arquivos");
        n = IO.readint("Fornecer a quantidade de valores: ");
        if (n <= 0) {
            IO.println("ERRO: Quantidade invalida.");
        } else {
            arquivo = new FILE(FILE.OUTPUT, "DADOS3.TXT");
            arquivo.println("" + n);
            for (k = 1; k <= n; k = k + 1) {
                dado = IO.readdouble("Dado = ");
                arquivo.println("" + dado);
            }
            arquivo.close();
        }
        IO.println();
        IO.pause("Apertar ENTER para continuar.");
    }

    public static void metodo07() {
        int n, k;
        double dado;
        String linha;
        FILE arquivo;
        IO.println("Consultar dados em arquivos");
        arquivo = new FILE(FILE.INPUT, "DADOS3.TXT");
        linha = arquivo.readln();
        n = IO.getint(linha);
        if (n <= 0) {
            IO.println("ERRO: Quantidade invalida.");
        } else {
            IO.println("Quantidade de dados = " + n);
            for (k = 1; k <= n; k = k + 1) {
                linha = arquivo.readln();
                dado = IO.getdouble(linha);
                IO.println("" + dado);
            }
            arquivo.close();
        }
        IO.println();
        IO.pause("Apertar ENTER para continuar.");
    }

    public static void metodo08() {
        String linha;
        FILE arquivo;
        IO.println();
        IO.println("Guardar dados em arquivos");
        IO.println();
        arquivo = new FILE(FILE.OUTPUT, "TEXTO.TXT");
        linha = IO.readln("");
        while (!linha.equals("PARAR")) {
            arquivo.println("" + linha);
            linha = IO.readln("");
        }
        arquivo.close();
        IO.println();
        IO.pause("Apertar ENTER para continuar.");
    }

    public static void metodo09() {
        String dado;
        FILE arquivo;
        IO.println();
        IO.println("Ler dados de arquivos");
        IO.println();
        arquivo = new FILE(FILE.INPUT, "TEXTO.TXT");
        dado = arquivo.read();
        while (!arquivo.eof()) {
            IO.println("" + dado);
            dado = arquivo.read();
        }
        arquivo.close();
        IO.println();
        IO.pause("Apertar ENTER para continuar.");
    }

    public static void metodo10() {
        String dado;
        int valor;
        FILE arquivo;
        IO.println();
        IO.println("Ler dados de arquivos");
        IO.println();
        arquivo = new FILE(FILE.INPUT, "TEXTO.TXT");
        dado = arquivo.read();
        while (!arquivo.eof()) {
            if (dado != null &&
                    dado.length() > 0) {
                IO.println("" + IO.getint(dado));
            }
            dado = arquivo.read();
        }
        arquivo.close();
        IO.println();
        IO.pause("Apertar ENTER para continuar.");
    }

    public static void main(String[] args) {
        IO.println("EXEMPLO0121 - Programa em Java");
        IO.println("Autor: ________________________");
        metodo01();
        metodo02();
        metodo03();
        metodo04();
        metodo05();
        metodo06();
        metodo07();
        metodo08();
        metodo09();
        metodo10();
        IO.pause("Apertar ENTER para terminar.");
    }
}