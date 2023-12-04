package hn.proyecto.tienda.Repositorios;

import java.util.Optional;

import org.springframework.data.jpa.repository.JpaRepository;

import hn.proyecto.tienda.Modelos.Clientes;

public interface ClientesRepository extends JpaRepository<Clientes, Integer> {
    Optional<Clientes> findByCorreo(String correo);
}
