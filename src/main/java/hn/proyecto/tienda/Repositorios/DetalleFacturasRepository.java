package hn.proyecto.tienda.Repositorios;

import org.springframework.data.jpa.repository.JpaRepository;

import hn.proyecto.tienda.Modelos.DetalleFacturas;

public interface DetalleFacturasRepository extends JpaRepository<DetalleFacturas, Integer> {
    
}
