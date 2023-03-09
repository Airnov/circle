from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/calculate', methods=['POST'])
def calculate():
    diameter = float(request.form['diameter'])
    if diameter <= 0:
        return render_template('index.html', error='Please enter a positive number.')
    radius = diameter / 2
    area = round(3.14159265359 * radius ** 2, 2)
    circumference = round(2 * 3.14159265359 * radius, 2)
    return render_template('result.html', area=area, circumference=circumference)

if __name__ == '__main__':
    app.run(debug=True)

