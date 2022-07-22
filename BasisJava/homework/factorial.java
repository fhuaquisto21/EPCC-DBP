package homework;

public class factorial {
    private int getFactorial(int n) {
        if (n == 0) {
            return 1;
        } else {
            return n * getFactorial(n - 1);
        }
    }

    public void print_first_20_factorial() {
        for (int i = 1; i <= 20; ++i) {
            System.out.format("[%o] -> %o\n", i, this.getFactorial(i));
        }
    }
}
