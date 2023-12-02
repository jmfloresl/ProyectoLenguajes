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
@Table(name = "Pedidos")
public class Pedidos {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "Id_Pedido")
    private int idPedido;

    @Column(name = "Fecha_Pedido", nullable = false)
    private Date fechaPedido;

    @Column(nullable = false)
    private String estado;

    @ManyToOne
    @JoinColumn(name = "Id_Cliente")
    private Clientes cliente;

}
