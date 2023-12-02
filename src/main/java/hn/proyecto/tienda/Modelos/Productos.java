package hn.proyecto.tienda.Modelos;

import java.math.BigDecimal;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;
import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;

@Entity
@Setter
@Getter
@AllArgsConstructor
@NoArgsConstructor
@Table(name = "Productos")
public class Productos {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "Id_Producto")
    private Integer idProducto;

    @Column(nullable = false, unique = true)
    private String nombre;

    @Column(name = "Precio_Unidad", nullable = false)
    private BigDecimal precioUnidad;

    @Column(nullable = false)
    private Integer stock;

    @Column(name = "Punto_Reorden")
    private Integer puntoReorden;
    
}
