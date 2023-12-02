package hn.proyecto.tienda.Modelos;

import java.math.BigDecimal;
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
@Table(name = "Facturas")
public class Facturas {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "Id_Factura")
    private int idFactura;

    @Column(name = "Fecha_Factura", nullable = false)
    private Date fechaFactura;

    @Column(nullable = false)
    private BigDecimal total;

    @ManyToOne
    @JoinColumn(name = "Id_Pedido_Producto")
    private PedidosProductos pedidoProducto;

    @ManyToOne
    @JoinColumn(name = "Id_Cliente")
    private Clientes cliente;
}
