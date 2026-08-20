# Frontend Engineer — Dasar HTML, CSS, JavaScript & Node.js

> Materi untuk VINIX7 Web Developer

---

## Daftar Isi

1. [Dasar HTML](#bagian-1-dasar-html)
2. [Dasar CSS](#bagian-2-dasar-css)
3. [Dasar JavaScript](#bagian-3-dasar-javascript)
4. [Pengenalan Node.js](#bagian-4-pengenalan-nodejs)
5. [Tools, Workflow & Karier](#bagian-5-tools-workflow--karier)

---

## BAGIAN 1: Dasar HTML

### 🏷️ Apa itu HTML & Sejarah Singkat

HTML (HyperText Markup Language) adalah bahasa markup standar yang digunakan untuk membuat **struktur** halaman web. HTML memberitahu browser bagaimana menampilkan konten — teks, gambar, link, form, dan lainnya.

| Fakta | Keterangan |
|-------|------------|
| 📅 Dibuat oleh | Tim Berners-Lee, **1991** di CERN |
| 📄 Versi Terbaru | **HTML5** (sejak 2014, terus diperbarui) |
| 🌐 Standarisasi | W3C & WHATWG |
| 🔧 Fungsi | Struktur & konten halaman web |

**Evolusi HTML:**
- **1991** — HTML 1.0 (hanya teks & link)
- **1995** — HTML 2.0 (form, tabel)
- **1997** — HTML 3.2 & 4.0 (styling, scripting)
- **2014** — HTML5 (multimedia, semantic, API)

---

### 📝 Struktur Dasar Dokumen HTML

Setiap halaman HTML memiliki **struktur dasar** yang wajib diikuti:

```html
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
  </head>
  <body>
    <h1>Halo Dunia!</h1>
    <p>Ini konten halaman web pertamaku.</p>
  </body>
</html>
```

**Penjelasan:**
- `<!DOCTYPE html>` — Deklarasi tipe dokumen (HTML5)
- `<html lang="id">` — Root element, `lang` untuk bahasa
- `<head>` — Metadata (tidak tampil di browser)
- `<meta charset>` — Encoding karakter (UTF-8)
- `<meta viewport>` — Responsive untuk mobile
- `<title>` — Judul tab browser
- `<body>` — Konten yang ditampilkan

---

### 🧱 Elemen & Tag Penting HTML

| Tag | Fungsi | Contoh |
|-----|--------|--------|
| `<h1>` – `<h6>` | Heading/Judul (hierarki) | `<h1>Judul Utama</h1>` |
| `<p>` | Paragraf teks | `<p>Ini paragraf.</p>` |
| `<a>` | Hyperlink | `<a href="url">Klik</a>` |
| `<img>` | Gambar | `<img src="foto.jpg" alt="Deskripsi">` |
| `<ul>` / `<ol>` | List (unordered/ordered) | `<ul><li>Item</li></ul>` |
| `<table>` | Tabel data | `<table><tr><td>Data</td></tr></table>` |
| `<div>` | Container/pembungkus | `<div class="wrapper">...</div>` |
| `<span>` | Inline container | `<span style="color:red">Teks</span>` |
| `<br>` | Line break | `Baris 1<br>Baris 2` |
| `<strong>` | Teks tebal (penting) | `<strong>Penting!</strong>` |

---

### 🔖 Semantic HTML

Semantic HTML menggunakan tag yang **bermakna** untuk mendeskripsikan struktur halaman, bukan hanya `<div>` untuk semuanya.

```html
<header>
  <nav>Menu navigasi</nav>
</header>
<main>
  <article>
    <section>Konten bagian 1</section>
    <section>Konten bagian 2</section>
  </article>
  <aside>Sidebar</aside>
</main>
<footer>Copyright 2026</footer>
```

**Manfaat Semantic HTML:**
- ✅ **SEO lebih baik** — Search engine memahami struktur konten
- ✅ **Accessibility** — Screen reader bisa navigasi lebih baik
- ✅ **Maintainability** — Kode lebih mudah dibaca & dipahami
- ✅ **Standar industri** — Best practice modern development

---

### 📋 Form & Input HTML

Form adalah cara pengguna **berinteraksi** dan **mengirim data** ke server.

```html
<form action="/submit" method="POST">
  <label for="nama">Nama:</label>
  <input type="text" id="nama" name="nama" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" minlength="8">

  <select name="role">
    <option value="student">Mahasiswa</option>
    <option value="teacher">Dosen</option>
  </select>

  <input type="checkbox" id="agree"> <label for="agree">Setuju</label>

  <button type="submit">Daftar</button>
</form>
```

**Jenis Input HTML5:**
| Type | Fungsi |
|------|--------|
| `text` | Teks biasa |
| `email` | Email (validasi otomatis) |
| `password` | Password (tersembunyi) |
| `number` | Angka |
| `date` | Tanggal |
| `file` | Upload file |
| `range` | Slider |
| `color` | Color picker |
| `checkbox` | Pilihan ganda |
| `radio` | Pilihan tunggal |

---

### 🎬 Media di HTML

HTML5 mendukung multimedia secara native tanpa plugin.

```html
<!-- Video -->
<video controls width="640">
  <source src="video.mp4" type="video/mp4">
</video>

<!-- Audio -->
<audio controls>
  <source src="music.mp3" type="audio/mpeg">
</audio>

<!-- Embed (YouTube, Maps, dll) -->
<iframe src="https://youtube.com/embed/..." width="560" height="315"></iframe>

<!-- Responsive Image -->
<picture>
  <source media="(min-width: 768px)" srcset="desktop.jpg">
  <source media="(min-width: 480px)" srcset="tablet.jpg">
  <img src="mobile.jpg" alt="Gambar responsif">
</picture>
```

---

### ✅ HTML Best Practices

| Prinsip | Penjelasan |
|---------|------------|
| 📐 **Indentasi konsisten** | Gunakan 2 atau 4 spasi untuk readability |
| 🏷️ **Gunakan Semantic** | Hindari `<div>` berlebihan, gunakan tag bermakna |
| 🖼️ **Alt pada gambar** | Selalu beri atribut `alt` untuk accessibility |
| ✅ **Validasi W3C** | Periksa kode di validator.w3.org |
| 📁 **Struktur folder rapi** | Pisahkan file: `css/`, `js/`, `images/`, `index.html` |
| 🔤 **Nama class bermakna** | `.card-title` bukan `.ct` atau `.div1` |
| 📱 **Mobile-first** | Selalu sertakan `<meta viewport>` |

---

## BAGIAN 2: Dasar CSS

### 🎨 CSS Fundamentals

CSS (Cascading Style Sheets) mengatur **tampilan visual** elemen HTML — warna, ukuran, posisi, animasi, dan layout.

**3 Cara Menambahkan CSS:**

```html
<!-- 1. Inline CSS -->
<p style="color: blue;">Teks biru</p>

<!-- 2. Internal CSS -->
<style>
  p { color: blue; }
</style>

<!-- 3. External CSS (Rekomendasi!) -->
<link rel="stylesheet" href="style.css">
```

**Jenis Selector:**
| Selector | Contoh | Target |
|----------|--------|--------|
| Element | `p { }` | Semua `<p>` |
| Class | `.card { }` | Elemen dengan `class="card"` |
| ID | `#header { }` | Elemen dengan `id="header"` |
| Universal | `* { }` | Semua elemen |
| Descendant | `.nav a { }` | `<a>` di dalam `.nav` |
| Pseudo-class | `a:hover { }` | Saat mouse hover |

---

### 📦 Box Model & Positioning

Setiap elemen HTML adalah sebuah **kotak** yang terdiri dari 4 layer:

```
┌─────────────────────────────────┐
│          MARGIN                 │
│   ┌───────────────────────┐     │
│   │      BORDER           │     │
│   │   ┌───────────────┐   │     │
│   │   │   PADDING     │   │     │
│   │   │   ┌───────┐   │   │     │
│   │   │   │CONTENT│   │   │     │
│   │   │   └───────┘   │   │     │
│   │   └───────────────┘   │     │
│   └───────────────────────┘     │
└─────────────────────────────────┘
```

```css
.box {
  width: 200px;
  padding: 20px;
  border: 2px solid #333;
  margin: 16px;
  box-sizing: border-box; /* Total width = 200px */
}
```

**CSS Position:**
| Value | Perilaku |
|-------|----------|
| `static` | Default, mengikuti flow normal |
| `relative` | Posisi relatif dari posisi normal |
| `absolute` | Posisi relatif dari parent terdekat yang positioned |
| `fixed` | Tetap di layar saat scroll |
| `sticky` | Kombinasi relative + fixed |

---

### 🔲 Flexbox Layout

Flexbox adalah sistem layout 1 dimensi untuk mengatur elemen **dalam satu baris atau kolom**.

```css
.container {
  display: flex;
  justify-content: center;    /* Horizontal */
  align-items: center;         /* Vertical */
  gap: 16px;                   /* Jarak antar item */
  flex-wrap: wrap;             /* Bungkus ke baris baru */
}

.item {
  flex: 1;                     /* Ukuran fleksibel */
}
```

**Properties Penting:**
| Property | Fungsi |
|----------|--------|
| `justify-content` | Alignment sumbu utama (horizontal) |
| `align-items` | Alignment sumbu silang (vertical) |
| `flex-direction` | Arah: `row` / `column` |
| `flex-wrap` | Wrapping items |
| `gap` | Jarak antar items |
| `flex-grow/shrink` | Rasio ukuran item |

---

### 📐 CSS Grid Layout

Grid adalah sistem layout **2 dimensi** — mengatur baris DAN kolom sekaligus.

```css
.grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);   /* 3 kolom sama rata */
  grid-template-rows: auto;
  gap: 20px;
}

.item-wide {
  grid-column: span 2;   /* Lebar 2 kolom */
}
```

**Kapan pakai Grid vs Flexbox?**
| Flexbox | Grid |
|---------|------|
| Layout 1 dimensi | Layout 2 dimensi |
| Navigasi, toolbar | Halaman layout utama |
| Alignment sederhana | Grid card/gallery |
| Konten dinamis | Layout yang terstruktur |

---

### 📱 Responsive Design & Media Queries

Responsive Design memastikan website tampil optimal di **semua ukuran layar**.

```css
/* Mobile First */
.container {
  padding: 16px;
}

/* Tablet */
@media (min-width: 768px) {
  .container {
    padding: 32px;
    max-width: 720px;
  }
}

/* Desktop */
@media (min-width: 1024px) {
  .container {
    padding: 48px;
    max-width: 1200px;
  }
}
```

**Unit Responsif:**
| Unit | Keterangan |
|------|------------|
| `%` | Relatif terhadap parent |
| `vw` / `vh` | Relatif terhadap viewport |
| `rem` | Relatif terhadap root font-size |
| `em` | Relatif terhadap parent font-size |
| `clamp()` | Min, preferred, max |

---

### ✨ CSS Modern: Variables & Animations

**CSS Custom Properties (Variables):**

```css
:root {
  --primary: #2563eb;
  --radius: 12px;
  --shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.button {
  background: var(--primary);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
}
```

**CSS Transitions & Animations:**

```css
/* Transition */
.card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

/* Keyframe Animation */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
.element {
  animation: fadeIn 0.5s ease-out;
}
```

---

### 🏗️ CSS Architecture & Best Practices

**BEM Naming Convention:**
```css
/* Block__Element--Modifier */
.card { }              /* Block */
.card__title { }       /* Element */
.card__title--large { } /* Modifier */
.card--featured { }    /* Block modifier */
```

**Best Practices:**
| Prinsip | Penjelasan |
|---------|------------|
| 📁 **External CSS** | Pisahkan CSS dari HTML |
| 🏷️ **BEM Naming** | Naming yang konsisten & predictable |
| 📐 **Reset/Normalize** | Konsistensi antar browser |
| 🔍 **DevTools** | Gunakan Chrome Inspector untuk debugging |
| 📦 **Modular** | Pisahkan CSS per komponen |
| ⚡ **Performance** | Hindari selector yang terlalu dalam |

---

## BAGIAN 3: Dasar JavaScript

### ⚡ Apa itu JavaScript & Sejarah

JavaScript adalah bahasa pemrograman yang awalnya dibuat untuk **menambah interaktivitas** di browser, kini digunakan di mana-mana — frontend, backend, mobile, desktop, bahkan IoT.

| Fakta | Keterangan |
|-------|------------|
| 👨‍💻 Dibuat oleh | Brendan Eich, **1995** (dalam 10 hari!) |
| 📜 Nama asli | Mocha → LiveScript → JavaScript |
| 📐 Standar | **ECMAScript** (ES6/ES2015 = revolusi besar) |
| 🌐 Runtime | Browser (V8, SpiderMonkey) + Node.js |
| 🏆 Popularitas | Bahasa #1 paling banyak digunakan (Stack Overflow Survey) |

**JavaScript di mana saja:**
- 🌐 **Frontend** — React, Vue, Angular, Svelte
- 🖥️ **Backend** — Node.js, Deno, Bun
- 📱 **Mobile** — React Native, Ionic
- 🖥️ **Desktop** — Electron (VS Code dibuat pakai ini!)
- 🤖 **IoT** — Johnny-Five

---

### 📦 Variabel, Tipe Data & Operator

```javascript
// Deklarasi variabel
let nama = "Budi";           // Bisa diubah
const umur = 21;              // Tidak bisa diubah (konstanta)
var kota = "Jakarta";         // Cara lama (hindari!)

// Tipe Data
let teks = "Hello";           // String
let angka = 42;               // Number
let benar = true;             // Boolean
let kosong = null;            // Null
let belumAda;                 // Undefined
let daftar = [1, 2, 3];      // Array
let orang = {                 // Object
  nama: "Budi",
  umur: 21
};

// Operator
let total = 10 + 5;          // Aritmatika: + - * / %
let sama = (10 === "10");    // Perbandingan: === !== > < >= <=
let logika = true && false;  // Logika: && || !
```

**`let` vs `const` vs `var`:**
| Fitur | `let` | `const` | `var` |
|-------|-------|---------|-------|
| Reassign | ✅ | ❌ | ✅ |
| Block scope | ✅ | ✅ | ❌ |
| Hoisting | ❌ | ❌ | ✅ |
| **Rekomendasi** | ✅ Default | ✅ Jika tetap | ❌ Hindari |

---

### 🔄 Kondisi & Perulangan

```javascript
// If / Else
let nilai = 85;
if (nilai >= 80) {
  console.log("A");
} else if (nilai >= 60) {
  console.log("B");
} else {
  console.log("C");
}

// Ternary Operator
let status = nilai >= 60 ? "Lulus" : "Tidak Lulus";

// Switch
switch (hari) {
  case "Senin": console.log("Semangat!"); break;
  case "Jumat": console.log("TGIF!"); break;
  default: console.log("Hari biasa");
}

// Perulangan
for (let i = 0; i < 5; i++) {
  console.log(i);
}

// For...of (Array)
const fruits = ["Apel", "Jeruk", "Mangga"];
for (const fruit of fruits) {
  console.log(fruit);
}

// While
let count = 0;
while (count < 3) {
  console.log(count);
  count++;
}
```

---

### 🔧 Function & Arrow Function

```javascript
// Function Declaration
function sapa(nama) {
  return `Halo, ${nama}!`;
}
console.log(sapa("Budi")); // "Halo, Budi!"

// Function Expression
const tambah = function(a, b) {
  return a + b;
};

// Arrow Function (ES6)
const kali = (a, b) => a * b;

// Arrow Function dengan body
const hitungDiskon = (harga, diskon) => {
  const potongan = harga * (diskon / 100);
  return harga - potongan;
};

// Callback Function
function prosesData(data, callback) {
  const hasil = data.toUpperCase();
  callback(hasil);
}
prosesData("hello", (result) => console.log(result));
// Output: "HELLO"
```

**Perbedaan:**
| Tipe | Syntax | `this` binding |
|------|--------|----------------|
| Declaration | `function nama() {}` | Dynamic |
| Expression | `const f = function() {}` | Dynamic |
| Arrow | `const f = () => {}` | Lexical (inherit parent) |

---

### 📚 Array & Object Methods

```javascript
const angka = [1, 2, 3, 4, 5];

// map — Transformasi setiap elemen
const kaliDua = angka.map(n => n * 2);
// [2, 4, 6, 8, 10]

// filter — Saring berdasarkan kondisi
const genap = angka.filter(n => n % 2 === 0);
// [2, 4]

// reduce — Akumulasi jadi satu nilai
const total = angka.reduce((acc, n) => acc + n, 0);
// 15

// find — Cari satu elemen
const ditemukan = angka.find(n => n > 3);
// 4

// Destructuring
const [a, b, ...sisa] = angka;
// a=1, b=2, sisa=[3,4,5]

const user = { nama: "Budi", umur: 21, kota: "Jakarta" };
const { nama, umur } = user;

// Spread Operator
const newArray = [...angka, 6, 7];
const newUser = { ...user, email: "budi@email.com" };
```

---

### 🌐 DOM Manipulation

DOM (Document Object Model) adalah **representasi halaman HTML sebagai objek JavaScript** yang bisa dimanipulasi.

```javascript
// Memilih elemen
const judul = document.querySelector('h1');
const tombol = document.getElementById('btn-kirim');
const items = document.querySelectorAll('.item');

// Mengubah konten
judul.textContent = 'Judul Baru';
judul.innerHTML = '<em>Judul</em> dengan HTML';

// Mengubah style
judul.style.color = '#2563eb';
judul.style.fontSize = '2rem';

// Mengubah class
judul.classList.add('aktif');
judul.classList.remove('aktif');
judul.classList.toggle('aktif');

// Membuat elemen baru
const card = document.createElement('div');
card.className = 'card';
card.textContent = 'Card Baru';
document.querySelector('.container').appendChild(card);

// Menghapus elemen
card.remove();
```

---

### 🎯 Event Handling

Event memungkinkan JavaScript **merespons aksi pengguna** — klik, ketik, scroll, submit.

```javascript
// addEventListener
const tombol = document.querySelector('#btn');
tombol.addEventListener('click', () => {
  alert('Tombol diklik!');
});

// Event dengan parameter
tombol.addEventListener('click', (event) => {
  console.log(event.target);       // Elemen yang diklik
  console.log(event.type);         // "click"
});

// preventDefault — Mencegah aksi default
const form = document.querySelector('form');
form.addEventListener('submit', (e) => {
  e.preventDefault();              // Form tidak dikirim
  const data = new FormData(form);
  console.log(data.get('nama'));
});

// Event Delegation
document.querySelector('.list').addEventListener('click', (e) => {
  if (e.target.matches('.item')) {
    console.log('Item diklik:', e.target.textContent);
  }
});
```

**Event Populer:**
| Event | Kapan Terjadi |
|-------|---------------|
| `click` | Elemen diklik |
| `submit` | Form dikirim |
| `keydown` / `keyup` | Tombol keyboard |
| `input` | Nilai input berubah |
| `scroll` | Halaman di-scroll |
| `load` | Halaman selesai dimuat |
| `mouseover` / `mouseout` | Mouse masuk/keluar elemen |

---

### 🔄 Async JavaScript

JavaScript adalah **single-threaded** tapi bisa menangani operasi asynchronous melalui callback, Promise, dan async/await.

```javascript
// Callback (cara lama)
setTimeout(() => {
  console.log('Selesai setelah 2 detik');
}, 2000);

// Promise
const ambilData = () => {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      resolve({ nama: "Budi", umur: 21 });
    }, 1000);
  });
};

ambilData().then(data => console.log(data));

// Async/Await (modern, rekomendasi!)
async function getData() {
  try {
    const response = await fetch('https://api.example.com/users');
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error('Error:', error);
  }
}

// Fetch API — Mengambil data dari server
const users = await fetch('/api/users');
const json = await users.json();
```

---

### 🚀 ES6+ Modern Features

```javascript
// Template Literals
const nama = "Budi";
const pesan = `Halo ${nama}, selamat datang!`;
// Multi-line
const html = `
  <div class="card">
    <h2>${nama}</h2>
  </div>
`;

// Destructuring (sudah dibahas di array)
const { x, y, ...rest } = { x: 1, y: 2, z: 3, w: 4 };

// Modules
// file: utils.js
export const formatRupiah = (n) => `Rp ${n.toLocaleString()}`;
export default class API { /* ... */ }

// file: app.js
import API, { formatRupiah } from './utils.js';

// Optional Chaining
const alamat = user?.alamat?.kota ?? "Tidak diketahui";

// Nullish Coalescing
const nama2 = input ?? "Anonymous";  // Hanya null/undefined

// Array/Object Spread (sudah dibahas)
// Promise.all — Parallel async
const [users2, posts] = await Promise.all([
  fetch('/api/users'),
  fetch('/api/posts')
]);
```

---

## BAGIAN 4: Pengenalan Node.js

### 🟢 Apa itu Node.js?

Node.js adalah **runtime environment** yang memungkinkan JavaScript berjalan **di luar browser** — di server, terminal, atau mesin apapun.

| Fakta | Keterangan |
|-------|------------|
| 👨‍💻 Dibuat oleh | Ryan Dahl, **2009** |
| ⚙️ Engine | Google V8 (sama seperti Chrome) |
| 🔄 Arsitektur | Event-driven, Non-blocking I/O |
| 📦 Package Manager | NPM (Node Package Manager) |
| 🌍 Penggunaan | Backend, CLI tools, DevOps, Real-time apps |

**Kenapa Node.js penting?**
- ✅ **Satu bahasa** untuk frontend & backend (JavaScript)
- ✅ **Non-blocking I/O** — sangat cepat untuk I/O operations
- ✅ **NPM** — ekosistem package terbesar di dunia (2+ juta packages)
- ✅ **Digunakan oleh** Netflix, LinkedIn, PayPal, Uber, NASA

---

### 📦 NPM & Package Management

NPM (Node Package Manager) adalah alat untuk **mengelola library/package** dalam project Node.js.

```bash
# Inisialisasi project baru
npm init -y

# Install package
npm install express           # Dependency produksi
npm install --save-dev nodemon # Dependency development

# Uninstall
npm uninstall express

# Jalankan script
npm run dev
npm start
```

**File `package.json`:**
```json
{
  "name": "my-app",
  "version": "1.0.0",
  "scripts": {
    "start": "node index.js",
    "dev": "nodemon index.js"
  },
  "dependencies": {
    "express": "^4.18.0"
  },
  "devDependencies": {
    "nodemon": "^3.0.0"
  }
}
```

**Semantic Versioning (SemVer):**
```
MAJOR.MINOR.PATCH
  ^4.18.2
  │  │  └── Bug fix (aman di-update)
  │  └───── Fitur baru (backward compatible)
  └──────── Breaking changes (hati-hati!)
```

---

### 🖥️ Membuat Server Sederhana

**Dengan modul `http` bawaan:**
```javascript
const http = require('http');

const server = http.createServer((req, res) => {
  res.writeHead(200, { 'Content-Type': 'text/html' });
  res.end('<h1>Hello dari Node.js!</h1>');
});

server.listen(3000, () => {
  console.log('Server berjalan di http://localhost:3000');
});
```

**Dengan Express.js (lebih praktis):**
```javascript
const express = require('express');
const app = express();

// Route GET
app.get('/', (req, res) => {
  res.json({ pesan: 'Halo dunia!' });
});

// Route POST
app.post('/users', (req, res) => {
  const { nama, email } = req.body;
  res.json({ status: 'User dibuat', nama, email });
});

// Route dengan parameter
app.get('/users/:id', (req, res) => {
  res.json({ userId: req.params.id });
});

app.listen(3000, () => console.log('Server aktif di port 3000'));
```

---

### 🌍 Node.js Ecosystem

**Framework Populer:**
| Framework | Deskripsi |
|-----------|-----------|
| **Express.js** | Minimalis, paling populer, fleksibel |
| **Fastify** | Fokus performa tinggi |
| **NestJS** | Enterprise-grade, TypeScript-first, mirip Angular |
| **Hapi** | Enterprise, fokus konfigurasi |
| **Koa** | Dari tim Express, lebih modern |

**ORM / Database:**
| Tool | Fungsi |
|------|--------|
| **Prisma** | Modern ORM, type-safe, auto migration |
| **Sequelize** | ORM tradisional, banyak fitur |
| **Mongoose** | ODM untuk MongoDB |
| **Drizzle** | Lightweight, SQL-like, TypeScript |

**Real-time & Lainnya:**
| Tool | Fungsi |
|------|--------|
| **Socket.io** | WebSocket real-time |
| **Bull/BullMQ** | Job queue & background tasks |
| **Passport.js** | Authentication middleware |
| **Multer** | File upload handler |

---

### 🔗 Fullstack JavaScript

Dengan JavaScript, kamu bisa membangun **seluruh aplikasi** dari depan sampai belakang.

**Stack Populer:**
| Stack | Komponen |
|-------|----------|
| **MERN** | MongoDB + Express + React + Node.js |
| **MEVN** | MongoDB + Express + Vue + Node.js |
| **MEAN** | MongoDB + Express + Angular + Node.js |
| **T3** | TypeScript + tRPC + Tailwind + Next.js |
| **Next.js** | Full-stack React framework |
| **Nuxt.js** | Full-stack Vue framework |

**Alur Data Client-Server:**
```
[Browser/Client]
    ↓ HTTP Request (GET /api/users)
[Node.js Server (Express)]
    ↓ Query
[Database (MongoDB/PostgreSQL)]
    ↓ Data
[Node.js Server]
    ↓ HTTP Response (JSON)
[Browser/Client]
    ↓ Render UI
[User melihat data]
```

---

## BAGIAN 5: Tools, Workflow & Karier

### 🛠️ Developer Tools & Workflow

**Editor & Tools:**
| Tool | Fungsi |
|------|--------|
| **VS Code** | Code editor #1, extension marketplace |
| **Chrome DevTools** | Inspect, debug, network, performance |
| **Git & GitHub** | Version control & kolaborasi |
| **Terminal/CLI** | Command line interface |
| **Postman/Insomnia** | API testing |
| **Figma** | Lihat desain & inspect CSS |

**Build Tools:**
| Tool | Fungsi |
|------|--------|
| **Vite** | Dev server & bundler modern (paling cepat!) |
| **Webpack** | Bundler tradisional, banyak plugin |
| **ESLint** | Linting — temukan error & enforce style |
| **Prettier** | Auto-format kode |
| **TypeScript** | Type checking untuk JavaScript |

**Workflow Git Dasar:**
```bash
git init                    # Inisialisasi repo
git add .                   # Stage semua perubahan
git commit -m "feat: ..."   # Commit dengan pesan
git push origin main        # Push ke remote
git branch fitur-baru       # Buat branch baru
git checkout fitur-baru     # Pindah ke branch
git merge fitur-baru        # Gabungkan branch
```

---

### 🚀 Roadmap & Karier Frontend Engineer

**Roadmap Frontend 2026:**
```
HTML & CSS Dasar
    ↓
JavaScript (ES6+)
    ↓
Version Control (Git)
    ↓
Package Manager (NPM)
    ↓
Framework (React/Vue/Angular/Svelte)
    ↓
State Management
    ↓
TypeScript
    ↓
Testing (Jest, Cypress)
    ↓
Performance & SEO
    ↓
Deployment (Vercel, Netlify)
```

**Peluang Karier:**
| Posisi | Skills | Estimasi Gaji/Bulan |
|--------|--------|---------------------|
| 💻 **Junior Frontend** | HTML, CSS, JS, Git | Rp 5–10 juta |
| 🔧 **Frontend Developer** | React/Vue, API, TypeScript | Rp 10–20 juta |
| 🏗️ **Senior Frontend** | Architecture, Testing, Performance | Rp 18–35 juta |
| 🔗 **Fullstack Developer** | Frontend + Node.js + Database | Rp 12–30 juta |
| 📱 **Mobile Developer (JS)** | React Native, Expo | Rp 10–25 juta |
| ⚙️ **DevOps/Platform** | CI/CD, Docker, Cloud | Rp 15–35 juta |

**Tips Memulai:**
- 🎯 Fokus ke satu framework (React atau Vue)
- 🛠️ Bangun portofolio dengan project nyata
- 🌐 Kontribusi ke open source
- 📝 Tulis blog/dokumentasi
- 🤝 Join komunitas developer lokal

---

## ❓ Kuis & Latihan

**Diskusi:**
1. Apa bedanya `let`, `const`, dan `var`? Kapan pakai masing-masing?
2. Jelaskan perbedaan Flexbox dan CSS Grid dengan analogi!
3. Kenapa Node.js disebut "non-blocking"? Apa artinya?

**Tertulis:**
4. Buatlah contoh kode Semantic HTML untuk halaman blog sederhana!
5. Tuliskan 3 perbedaan antara `==` dan `===` di JavaScript!

**Praktik:**
6. Buat halaman To-Do List dengan HTML, CSS, dan JavaScript (DOM manipulation)!
7. Jalankan server Express.js sederhana yang menampilkan "Hello World" di browser!

---

## 📚 Referensi & Sumber Belajar

**📖 Dokumentasi Resmi:**
- [MDN Web Docs](https://developer.mozilla.org) — Referensi HTML, CSS, JS terlengkap
- [JavaScript.info](https://javascript.info) — Tutorial JS modern & mendalam
- [Node.js Docs](https://nodejs.org/docs) — Dokumentasi resmi Node.js
- [Express.js Guide](https://expressjs.com) — Framework server Node.js

**🎓 Platform Belajar:**
- [freeCodeCamp](https://freecodecamp.org) — Belajar web gratis & terstruktur
- [The Odin Project](https://theodinproject.com) — Kurikulum fullstack gratis
- [Scrimba](https://scrimba.com) — Belajar coding interaktif
- [Frontend Masters](https://frontendmasters.com) — Kursus profesional

**📺 YouTube:**
- Traversy Media — Tutorial web development
- Kevin Powell — CSS terbaik & terdalam
- Fireship — Penjelasan singkat & padat
- Web Dev Simplified — Konsep JS yang jelas

**🗺️ Roadmap:**
- [roadmap.sh/frontend](https://roadmap.sh/frontend) — Panduan belajar frontend lengkap

---

> *"Any application that can be written in JavaScript, will eventually be written in JavaScript."*
> — **Jeff Atwood** (Atwood's Law)
