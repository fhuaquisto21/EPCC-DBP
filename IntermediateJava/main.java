import java.util.Scanner;
import homework.*;

class Main {
    public static void main(String args[]) {
        /** PERSONA: Atributos privaods y acceso a estos mediante métodos */
        Scanner scan = new Scanner(System.in);
        person persona1 = new person();
        persona1.setDNI(75135938);
        persona1.setNames("Fabricio Jesús");
        persona1.setLastnmae("Huaquisto Quispe");
        persona1.setYears(19);
        persona1.setEmail("fhuaquisto@unsa.edu.pe");
        persona1.setBirtday("2003-03-30");
        
        person persona2 = new person(87654321, "Marco Mercader", "Mercedéz Mamani","mmarco@unsa.edu.pe", 18, "2000-10-10");
        
        person persona3 = new person();
        
        System.out.println("PERSONA 3: ");
        System.out.println("DNI: ");
        int DNI = scan.nextInt();
        System.out.println("Nombres: ");
        String names = scan.next();
        System.out.println("Años: ");
        int years = scan.nextInt();
        System.out.println("Apellidos: ");
        String lastname = scan.next();
        System.out.println("Email: ");
        String email = scan.next();
        System.out.println("Fecha de nacimiento: ");
        String birthday = scan.next();
    
        persona3.setDNI(DNI);
        persona3.setNames(names);
        persona3.setLastnmae(lastname);
        persona3.setYears(years);
        persona3.setEmail(email);
        persona3.setBirtday(birthday);
        System.out.println("");
        persona1.printPerson();
        System.out.println("");
        persona2.printPerson();
        System.out.println("");
        persona3.printPerson();
        scan.close();

        /** PUNTO: Métodos sobre puntos dentro de un plano */
        System.out.format("\n\n");
        punto point = new punto();
        point.setX(12);
        point.setY(5);
        
        punto point2 = new punto(7, 2);
        System.out.format("Los puntos son: %s\n", point.comparePuntos(point2) ? "Iguales" : "Diferentes");
        System.out.format("La distancia euclideana entre los puntos es: %.2f\n", point.distanceEuclideana(point2));
        System.out.format("La distancia euclideana entre point y el punto (0, 0) es: %.2f\n", point.distanceEuclideanaZero());
    }
}