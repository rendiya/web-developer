from flask import Flask, jsonify

app = Flask(__name__)

# Simulasi data dari Database Products (biasanya ini connect ke DB terpisah)
products_db = [
    {"id": 101, "name": "Laptop Asuz", "price": 15000000},
    {"id": 102, "name": "Mouse Logitek", "price": 250000}
]

@app.route('/products', methods=['GET'])
def get_products():
    return jsonify({
        "status": "success",
        "service_name": "Products Microservice",
        "data": products_db
    })

if __name__ == '__main__':
    # Berjalan di port 5000 di dalam container
    app.run(host='0.0.0.0', port=5000)
