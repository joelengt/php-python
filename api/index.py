from flask import Flask
from flask import request
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)

class Product(Resource):
  def get(self):
    data = request.headers.get('Authorization')
    
    return {
      'products': ['apple', 'orange', 'watermelon', 'pineapple'],
      'headers': data
    }
  
  def post(self):
    data = request.headers.get('Authorization')
    
    return {
      'products': ['apple2', 'orange2', 'watermelon2', 'pineapple2'],
      'headers': data
    }

api.add_resource(Product, '/')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)