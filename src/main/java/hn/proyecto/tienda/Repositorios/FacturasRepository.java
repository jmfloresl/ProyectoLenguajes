package hn.proyecto.tienda.Repositorios;

import org.springframework.data.jpa.repository.JpaRepository;

import hn.proyecto.tienda.Modelos.Facturas;

public interface FacturasRepository extends JpaRepository<Facturas, Integer> {
    
}
