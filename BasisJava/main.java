import javax.print.attribute.standard.PageRanges;

import homework.*;

class Main {
    public static void main(String args[]) {
        user user_test = new user("Fabricio", "Huaquisto", 1.70, 60.0);
        System.out.println("Usuario:");
        user_test.printUser();

        pares pares_test = new pares();
        System.out.println("\nNúmeros pares:");
        pares_test.print_first_15_numbers();
        
        factorial factorial_test = new factorial();
        System.out.println("\nFactoriales:");
        factorial_test.print_first_20_factorial();
    }
}