package homework;

public class user {
    public String name;
    public String lastname;
    public double height;
    public double weight;
    
    public user(String _name, String _lastName, double _height, double _weight) {
        this.name = _name;
        this.lastname = _lastName;
        this.height = _height;
        this.weight = _weight;
    }

    public void printUser() {
        System.out.format("Nombre: %s; Apellido: %s; Altura: %.2f; Peso: %.2f\n", this.name, this.lastname, this.height, this.weight);
    }
}
