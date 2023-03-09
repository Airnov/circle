from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('home.html')

@app.route('/calculate', methods=['POST'])
def calculate():
    diameter = float(request.form['diameter'])
    radius = diameter / 2
    area = 3.14 * radius ** 2
    circumference = 2 * 3.14 * radius
    return render_template('result.html', area=area, circumference=circumference)

if __name__ == '__main__':
    app.run(debug=True)
