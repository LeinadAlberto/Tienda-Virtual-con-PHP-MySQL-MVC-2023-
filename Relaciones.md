- Relaciona la Tabla productos con la Tabla categorias

    ALTER TABLE `productos` ADD FOREIGN KEY (`id_categoria`) REFERENCES `categorias`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 

- Relaciona la Tabla detalle_pedidos con la Tabla pedidos
    ALTER TABLE `detalle_pedidos` ADD FOREIGN KEY (`id_pedido`) REFERENCES `pedidos`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 

- Página de Tienda Online
    https://www.kobu.cl/