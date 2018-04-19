/**
 * Exemplo0181
 *
 * @author
 * @version 01
 */

import IO.*;

class Arranjo {

    public Object[] tabela;

    public Arranjo() {
        tabela = null;
    }
}

public class ED10 {
    public static void metodo01() {
        Arranjo a1 = null;
        Arranjo a2 = new Arranjo();
        IO.println("Definicoes de arranjo");
        if (a1 == null) {
            IO.println("Arranjo a1 nulo");
        } else {
            IO.println("Arranjo a1 nao nulo");
        }
        if (a2 == null) {
            IO.println("Arranjo a2 nulo");
        } else {
            IO.println("Arranjo a2 nao nulo");
        }
        IO.println();
        IO.pause("Apertar ENTER para continuar.");
    }

    public static void main(String[] args) {
        IO.println("EXEMPLO0181 - Programa em Java");
        IO.println("Autor: ________________________");
        metodo01();
        IO.pause("Apertar ENTER para terminar.");
    }
}