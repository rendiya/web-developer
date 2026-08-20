from flask import Flask, jsonify

app = Flask(__name__)

# Simulasi data dari Database Users (biasanya ini connect ke DB terpisah)
users_db = [
    {"id": 1, "name": "Budi", "email": "budi@email.com"},
    {"id": 2, "name": "Siti", "email": "siti@email.com"}
]

@app.route('/users', methods=['GET'])
def get_users():
    return jsonify({
        "status": "success",
        "service_name": "Users Microservice",
        "data": users_db
    })

if __name__ == '__main__':
    # Berjalan di port 5000 di dalam container
    app.run(host='0.0.0.0', port=5000)
