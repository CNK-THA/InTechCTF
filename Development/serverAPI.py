import flask
from flask import request, jsonify, render_template


app = flask.Flask(__name__)
app.config["DEBUG"] = False


@app.route("/secret", methods=['POST'])
def index_info():
    if (request.form['secret_string'] == "youneedthis") and (request.form['date'] == "24-4-2021") \
        and (request.form['authentication'] == "intechCTF"):
        return 'intechCTFwith'

    return '123'

    # return render_template("index.html", suggestions = accounts)


app.run()