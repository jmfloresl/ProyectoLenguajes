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
@Table(name = "PedidosProductos")
public class PedidosProductos {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "Id_Pedido_Producto")
    private int idPedidoProducto;

    @ManyToOne
    @JoinColumn(name = "Id_Pedido")
    private Pedidos pedido;

    @ManyToOne
    @JoinColumn(name = "Id_Producto")
    private Productos producto;

    @Column(nullable = false)
    private int cantidad;

    @Column(name = "Precio_Unitario", nullable = false)
    private BigDecimal precioUnitario;

    
}
