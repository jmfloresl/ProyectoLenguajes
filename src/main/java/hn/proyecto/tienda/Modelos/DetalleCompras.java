package hn.proyecto.tienda.Modelos;

import java.math.BigDecimal;

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
@Table(name = "DetalleCompras")
public class DetalleCompras {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "Id_Detalle_Compra")
    private int idDetalleCompra;

    @ManyToOne
    @JoinColumn(name = "Id_Compra")
    private Compras compra;

    @ManyToOne
    @JoinColumn(name = "Id_Producto")
    private Productos producto;

    @Column(name = "Cantidad_Comprada", nullable = false)
    private int cantidadComprada;

    @Column(name = "Precio_Unitario", nullable = false)
    private BigDecimal precioUnitario;
    
}
