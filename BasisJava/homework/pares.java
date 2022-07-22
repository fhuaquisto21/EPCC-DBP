package homework;

public class pares {
    public void print_first_15_numbers() {
        for (int i = 1; i <= 15; ++i) {
            if (i % 2 == 0) {
                System.out.format("%o es par\n", i);
            } else {
                System.out.format("%o es impar\n", i);
            }
        }
    }
}
