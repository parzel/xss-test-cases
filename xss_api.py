from flask import Flask
app = Flask(__name__)

@app.route('/')
def index():
    return 'Index Page'

@app.route('/hello')
def hello():
    return 'Hello, World'

@app.route('/<path:subpath>/plain')
def plain(subpath):
    return 'Subpath %s' % subpath

@app.route('/<path:subpath>/value')
def value(subpath):
    return '<img src="%s">' % subpath

@app.route('/<path:subpath>/eval')
def script(subpath):
    return '<script>eval(%s)</script>' % subpath.replace("</script>", "")

if __name__ == '__main__':
    app.run()