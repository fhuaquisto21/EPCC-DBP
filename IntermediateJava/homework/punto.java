package homework;

import java.util.*;

public class punto {
    private int x;
    private int y;    
    
    public punto() {}
    public punto(int _x, int _y) {
        this.x = _x;
        this.y = _y;
    }
    
    public int getX() {
        return this.x;
    }

    public int getY() {
        return this.y;
    }
    
    public void setX(int _x) {
        this.x = _x;
    }
    
    public void setY(int _y) {
        this.y = _y;
    }
    
    public boolean comparePuntos(punto _other) {
        if (this.x == _other.getX() && this.y == _other.getY()) {
            return true;
        }
        return false;
    }
    
    public double distanceEuclideana(punto _other) {
        return Math.sqrt(Math.pow((this.x - _other.getX()), 2) + Math.pow((this.y - _other.getY()), 2));
    }
    
    public double distanceEuclideanaZero() {
        return Math.sqrt(Math.pow(this.x, 2) + Math.pow(this.y, 0));
    }
}
