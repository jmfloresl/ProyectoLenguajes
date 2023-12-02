package hn.proyecto.tienda.Modelos;

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
@Table(name = "DetalleFacturas")
public class DetalleFacturas {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "Id_Detalle_Factura")
    private int idDetalleFactura;

    @ManyToOne
    @JoinColumn(name = "Id_Pedido_Producto")
    private PedidosProductos pedidoProducto;

    @ManyToOne
    @JoinColumn(name = "Id_Factura")
    private Facturas factura;

    @Column(name = "Cantidad_Facturada", nullable = false)
    private int cantidadFacturada;
    
}
