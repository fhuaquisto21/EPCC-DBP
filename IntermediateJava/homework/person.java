package homework;

public class person {
    private int DNI;
    private String names;
    private String lastname;
    private String email;
    private int years;
    private String birthday;
    
    public person() {}
    public  person(int _DNI, String _names, String _lastname, String _email, int _years, String _birthday) {
        this.DNI = _DNI;
        this.names = _names;
        this.lastname = _lastname;
        this.email = _email;
        this.years = _years;
        this.birthday = _birthday;
    }
    
    public int getDNI() {
        return this.DNI;
    }
    
    public String getNames() {
        return this.names;
    }
    
    public String getLastname() {
        return this.lastname;
    }
    
    public String getEmail() {
        return this.email;
    }
    
    public int getYears() {
        return this.years;
    }
    
    public String getBirthday() {
        return this.birthday;
    }
    
    public void setDNI(int _DNI) {
        this.DNI = _DNI;
    }

    public void setNames(String _names) {
        this.names = _names;
    }

    public void setLastnmae(String _lastname) {
        this.lastname = _lastname;
    }

    public void setEmail(String _email) {
        this.email = _email;
    }

    public void setYears(int _years) {
        this.years = _years; 
    }

    public void setBirtday(String _birthday) {
        this.birthday = _birthday; 
    }
    
    public void printPerson() {
        System.out.println("DNI: " + this.DNI);
        System.out.println("NOMBRES: " + this.names);
        System.out.println("APELLIDOS: " + this.lastname);
        System.out.println("AÑOS: " + this.years);
        System.out.println("EMAIL: " + this.email);
        System.out.println("FECHA DE NACIMIENTO: " + this.birthday);
    }
}
