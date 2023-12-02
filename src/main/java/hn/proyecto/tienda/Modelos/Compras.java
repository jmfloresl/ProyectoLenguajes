package hn.proyecto.tienda.Modelos;

import java.util.Date;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;
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
@Table(name = "Compras")
public class Compras {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "Id_Compra")
    private int idCompra;

    @Column(name = "Cantidad_Comprada", nullable = false)
    private int cantidadComprada;

    @Column(name = "Fecha_Compra", nullable = false)
    private Date fechaCompra;

    @ManyToOne
    @JoinColumn(name = "Id_Producto")
    private Productos producto;

    
}
