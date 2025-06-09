# ===== KODE LAMA ANDA (TIDAK DIUBAH) =====
from flask import Flask, render_template, request, redirect, url_for, session, flash
app = Flask(__name__)
app.secret_key = 'rahasia'

@app.route("/")
def home():
    return render_template("index.html")

# ... (kode route lama lainnya) ...

# ===== FITUR BARU YANG DITAMBAHKAN =====
# Profil Pengguna
@app.route("/profile")
def profile():
    if 'username' not in session:
        return redirect(url_for('login'))
    return render_template("profile.html")

# Hapus Akun
@app.route("/delete-account", methods=["POST"])
def delete_account():
    if 'username' not in session:
        return redirect(url_for('login'))
    # Logika hapus akun dari database
    session.pop('username', None)
    flash("Akun berhasil dihapus!")
    return redirect(url_for('home'))

# Chatbot (Hanya untuk yang login)
@app.route("/chat")
def chat():
    if 'username' not in session:
        return redirect(url_for('login'))
    return render_template("chat.html")