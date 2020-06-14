class Product {
  constructor(name, price, year) {
      this.name = name;
      this.price = price;
      this.year = year;
  }
}

class UI {
  addProduct(product) {
      const productList = document.getElementById('lista-productos');
      const element = document.createElement('div');
      element.innerHTML = `
          <div class="card text-center mb-4">
              <div class="card-body">
                  <strong>Product</strong>: ${product.name} -
                  <strong>Price</strong>: ${product.price} - 
                  <strong>Year</strong>: ${product.year}
                  <a href="#" class="btn btn-danger" name="delete">Delete</a>
              </div>
          </div>
      `;
      productList.appendChild(element);
  }

  resetForm() {
      document.getElementById('productoFormulario').reset();
  }

  deleteProduct(element) {
      if (element.name === 'delete') {
          element.parentElement.parentElement.remove();
          this.showMessage('Producto eliminado exitosamente', 'info');
      }
  }

  showMessage(message, cssClass) {
      const div = document.createElement('div');
      div.className = `alert alert-${cssClass} mt-2`;
      div.appendChild(document.createTextNode(message));

      const container = document.querySelector('.container');
      const app = document.querySelector('#App');

      container.insertBefore(div, app);

      setTimeout(function () {
          document.querySelector('.alert').remove();
      }, 5000);
  }
}

// DOM Events
document.getElementById('productoFormulario')
  .addEventListener('submit', function (e) {

      const name = document.getElementById('name').value,
          price = document.getElementById('price').value,
          year = document.getElementById('year').value;

      // Create a new Oject Product
      const product = new Product(name, price, year);

      // Create a new UI
      const ui = new UI();

      // Input User Validation
      if (name === '' || price === '' || year === '') {
          ui.showMessage('Por favor complete los campos vacíos', 'danger');
          
          return;
      }

      // Save Product
      ui.addProduct(product);
      ui.showMessage('Producto añadido exitosamente', 'success');
      ui.resetForm();

      e.preventDefault();
  });

document.getElementById('lista-productos')
  .addEventListener('click', function (e) {
      const ui = new UI();
      ui.deleteProduct(e.target);
      e.preventDefault();
  });