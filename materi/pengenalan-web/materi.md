# Pengenalan Web, UI/UX & Wireframe

> Materi untuk VINIX7 Web Developer

---

## Daftar Isi

1. [Pengenalan World Wide Web](#bagian-1-pengenalan-world-wide-web)
2. [Teknologi Dasar Web: HTML, CSS & JavaScript](#bagian-2-teknologi-dasar-web-html-css--javascript)
3. [Pengenalan UI/UX Design](#bagian-3-pengenalan-uiux-design)
4. [Wireframe & Prototyping](#bagian-4-wireframe--prototyping)
5. [Arsitektur Web: Monolith vs Microservices](#bagian-5-arsitektur-web-monolith-vs-microservices)

---

## BAGIAN 1: Pengenalan World Wide Web

### 🌐 Apa itu World Wide Web?

World Wide Web (WWW) adalah sistem informasi di internet yang memungkinkan dokumen dan sumber daya terhubung satu sama lain melalui **hyperlink** dan dapat diakses melalui browser.

| Fakta | Keterangan |
|-------|-----------|
| 📅 Ditemukan | Tim Berners-Lee, **1989** di CERN, Swiss |
| 🔗 Hyperlink | Menghubungkan dokumen melalui URL |
| 🌍 Global | Lebih dari **1.9 miliar** website aktif |
| 📱 Multi-Device | PC, Tablet, HP, SmartTV, dll. |

---

### 🔄 Internet vs World Wide Web

> 💡 **Analogi**: Internet adalah **jalan raya**, sedangkan World Wide Web adalah **kendaraan** yang berjalan di atasnya.

| 🌐 INTERNET | 🕸️ WORLD WIDE WEB |
|------------|------------------|
| Infrastruktur global jaringan komputer yang saling terhubung | Layanan yang berjalan di atas internet menggunakan HTTP/HTTPS |
| Jaringan fisik (kabel, router, server) | Dokumen HTML / Website |
| Protokol TCP/IP | Protokol HTTP/HTTPS |
| Mencakup Email, FTP, VoIP, dll. | Browser sebagai klien |
| Infrastruktur yang lebih luas | **Bagian dari** internet |

---

## BAGIAN 2: Teknologi Dasar Web: HTML, CSS & JavaScript

Tiga pilar utama teknologi web yang **wajib dikuasai** untuk membangun website modern:

| Teknologi | Fungsi | Analogi |
|-----------|--------|---------|
| **HTML** | Struktur / Kerangka | Tulang/Rangka bangunan |
| **CSS** | Tampilan / Gaya | Cat & dekorasi bangunan |
| **JavaScript** | Interaksi / Logika | Sistem listrik & mekanikal |

---

### 🏷️ HTML — HyperText Markup Language

HTML adalah bahasa markup standar untuk membuat **struktur** halaman web. Setiap elemen didefinisikan menggunakan tag.

```html
<!DOCTYPE html>
<html lang="id">
  <head>
    <title>Halaman Pertama</title>
  </head>
  <body>
    <h1>Halo Dunia!</h1>
    <p>Ini paragraf pertama.</p>
  </body>
</html>
```

**Tag-tag penting:**
- `<html>` — Root element (pembungkus utama)
- `<head>` — Metadata halaman (judul, link CSS, dll.)
- `<body>` — Konten yang tampil di browser
- `<h1>`–`<h6>` — Heading / Judul (hierarki)
- `<p>` — Paragraf teks
- `<a>` — Hyperlink
- `<img>` — Gambar

---

### 🎨 CSS — Cascading Style Sheets

CSS digunakan untuk mengatur **tampilan dan gaya** elemen HTML.

```css
body {
  font-family: 'Inter', sans-serif;
  background-color: #f8fafc;
  color: #334155;
}

h1 {
  color: #1e40af;
  font-size: 2.5rem;
}

.tombol {
  background: #2563eb;
  color: white;
  padding: 12px 24px;
  border-radius: 8px;
}
```

**Konsep penting CSS:**
- **Selector** — Menentukan elemen mana yang diberi gaya
- **Properties** — Properti yang diubah (warna, ukuran, dll.)
- **Box Model** — Margin, Border, Padding, Content
- **Flexbox & Grid** — Sistem layout modern
- **Responsive** — Media queries untuk berbagai ukuran layar

---

### ⚡ JavaScript — Bahasa Pemrograman Web

JavaScript menambahkan **interaksi dan logika** ke halaman web.

```javascript
// Contoh sederhana: tombol klik
const tombol = document.getElementById('btn-klik');

tombol.addEventListener('click', () => {
  alert('Halo! Kamu mengklik tombol ini.');
});

// Contoh: mengubah teks
document.getElementById('judul').textContent = 'Teks Baru!';
```

**Kemampuan JavaScript:**
- Merespons aksi pengguna (klik, scroll, input)
- Mengubah konten HTML secara dinamis
- Mengirim/menerima data dari server (Fetch/AJAX)
- Validasi form sebelum dikirim
- Membuat animasi dan efek interaktif

---

## BAGIAN 3: Pengenalan UI/UX Design

### 🖥️ Apa itu UI (User Interface)?

User Interface (UI) adalah **semua elemen visual** yang terlihat dan digunakan oleh pengguna untuk berinteraksi dengan produk digital.

**Komponen UI:**

| Elemen | Contoh |
|--------|--------|
| 🔘 Tombol (Button) | CTA, Submit, Cancel |
| 📝 Form Input | Text field, dropdown, checkbox |
| 🎨 Warna (Color) | Palet warna brand |
| 🔤 Tipografi | Font, ukuran, style teks |
| 📐 Layout & Grid | Susunan elemen di layar |
| 🖼️ Ikon & Gambar | Visual elemen pendukung |

---

### 👤 Apa itu UX (User Experience)?

User Experience (UX) adalah **keseluruhan pengalaman** yang dirasakan pengguna saat berinteraksi dengan produk — mencakup kemudahan, kenyamanan, kepuasan, dan efisiensi.

**6 Pilar UX (Peter Morville's UX Honeycomb):**

| Pilar | Arti |
|-------|------|
| 💡 **Useful** | Berguna — memenuhi kebutuhan pengguna |
| 🎯 **Usable** | Mudah digunakan — intuitif & efisien |
| 😊 **Desirable** | Menyenangkan — estetis & emosional |
| 🔍 **Findable** | Mudah ditemukan — navigasi yang jelas |
| ♿ **Accessible** | Dapat diakses — inklusif untuk semua |
| 🔒 **Credible** | Terpercaya — membangun kepercayaan user |

---

### ⚖️ Perbedaan UI dan UX

> 💡 **UI = CARA PRODUK TERLIHAT** | **UX = CARA PRODUK TERASA DAN BEKERJA**

| 🖥️ UI Design | 👤 UX Design |
|-------------|-------------|
| Fokus pada tampilan visual | Fokus pada pengalaman user |
| Warna, tipografi, ikon | Alur & navigasi produk |
| Layout & komposisi | Penelitian pengguna |
| Konsistensi visual & Estetika | Pemecahan masalah & Kepuasan |
| **Output:** Mockup / Prototype Visual Final | **Output:** Wireframe / User Flow / Journey Map |

---

## BAGIAN 4: Wireframe & Prototyping

### 📐 Apa itu Wireframe?

Wireframe adalah **sketsa/rancangan kasar** struktur halaman web atau aplikasi yang menunjukkan tata letak elemen **tanpa** detail visual seperti warna, font, atau gambar nyata.

**Karakteristik Wireframe:**
- ☑ Hanya bentuk & layout, bukan visual final
- ☑ Kotak mewakili gambar, teks sebagai placeholder
- ☑ Menentukan hierarki konten halaman
- ☑ Cepat dibuat, mudah direvisi
- ☑ Alat komunikasi tim (desainer, developer, klien)

---

### 📊 Jenis-Jenis Wireframe

| Jenis | Deskripsi | Digunakan Untuk |
|-------|-----------|----------------|
| **Lo-Fi** (Low-Fidelity) | Sketsa tangan atau digital sederhana, tanpa detail visual, sangat cepat dibuat | Tahap awal / ideasi & brainstorm |
| **Mid-Fi** (Mid-Fidelity) | Digital, lebih terstruktur. Grid & spacing mulai jelas. Placeholder teks & gambar | Presentasi & feedback |
| **Hi-Fi** (High-Fidelity) | Mendekati desain final. Warna, font, ikon nyata. Interaktif (clickable) | Prototype & user testing |

---

### 🧩 Elemen-Elemen dalam Wireframe

| Simbol | Elemen | Fungsi |
|--------|--------|--------|
| `[ ☰ ]` | **Navigation Bar** | Menu utama, logo, dan CTA header |
| `[ ▬▬▬ ]` | **Hero Section** | Banner utama dengan headline & tombol |
| `[ ✕ ]` | **Image Placeholder** | Kotak dengan 'X' diagonal = area gambar |
| `═══` | **Text Block** | Garis horizontal = placeholder teks |
| `[ Button ]` | **Call-to-Action** | Tombol aksi utama pengguna |
| `[ ☰ ]` | **Hamburger Menu** | Menu mobile/collapse |
| `[ ▼ ]` | **Dropdown** | Pilihan yang dapat diperluas |
| `[ Form ]` | **Input Field** | Kotak isian untuk user input |
| `═══════` | **Footer** | Area bawah dengan info & link |

---

### 🔗 Prototyping

Prototype adalah **simulasi interaktif** produk yang memungkinkan pengguna 'merasakan' cara kerja produk sebelum dikembangkan. Prototype dibuat dari wireframe yang dihubungkan satu sama lain.

**Jenis Prototype:**

| Jenis | Deskripsi |
|-------|-----------|
| **Paper Prototype** | Sketsa kertas dihubungkan dengan tangan. Paling cepat & murah. |
| **Digital Lo-Fi** | Wireframe digital dengan link antar halaman. |
| **Interactive Hi-Fi** | Desain final interaktif, mendekati produk nyata. |

**Manfaat Prototyping:**
- Validasi ide sebelum mulai coding
- Hemat waktu & biaya development
- Mudah mendapat feedback dari user
- Iterasi cepat tanpa perlu menulis kode

---

### 🛠️ Tools Wireframe & Prototyping

| Tool | Tipe | Keterangan |
|------|------|-----------|
| **Figma** | Free & Pro | Kolaborasi real-time, paling populer saat ini |
| **Adobe XD** | Berbayar | Terintegrasi dengan ekosistem Adobe |
| **Sketch** | Mac Only | Standar industri untuk desainer Mac |
| **Balsamiq** | Lo-Fi Khusus | Khusus wireframe cepat bergaya sketsa |
| **InVision** | Prototype | Platform prototyping & kolaborasi tim |
| **Marvel App** | Mudah | Cocok untuk pemula, tersedia versi gratis |
| **Miro** | Whiteboard | Mind mapping & low-fi wireframe |
| **Pencil + Kertas** | Manual | Paling cepat untuk ide awal |

---

### 🔄 Alur Proses Desain UI/UX

```
1. RESEARCH          → User interview, survei, kompetitor analysis
         ↓
2. DEFINE            → Problem statement, user persona, user journey
         ↓
3. INFO ARCHITECTURE → Sitemap, user flow, navigasi
         ↓
4. WIREFRAME         → Lo-fi sketsa struktur tiap halaman
         ↓
5. VISUAL DESIGN     → UI Design dengan warna, tipografi, aset
         ↓
6. PROTOTYPE         → Interaktif, siap untuk testing
         ↓
7. USER TESTING      → Usability testing, feedback, iterasi
         ↓
8. HANDOFF           → Desain final ke tim developer
```

---

### 🗺️ Sitemap — Peta Struktur Website

Sitemap adalah **diagram hierarki** yang menunjukkan semua halaman dalam website dan bagaimana mereka saling terhubung.

```
HOME
├── Tentang
├── Produk
│   ├── Kategori A
│   ├── Kategori B
│   └── Detail Produk
├── Blog
└── Kontak
```

> Sitemap dibuat **sebelum wireframe** agar tim memiliki gambaran lengkap struktur website yang akan dibangun.

---

### 🔀 User Flow — Alur Pengguna

User Flow adalah **diagram** yang menggambarkan langkah-langkah yang dilalui pengguna untuk menyelesaikan tugas tertentu.

**Contoh User Flow: Proses Login**

```
[Mulai] → [Buka Halaman Login] → [Isi Email & Password]
                                          ↓
                               [Valid?]
                              ↙         ↘
              [Ya]                         [Tidak]
               ↓                              ↓
  [Masuk ke Dashboard]          [Tampilkan Pesan Error]
               ↓                              ↓
           [Selesai]                [Kembali ke Form]
```

**Simbol Standar User Flow:**
| Simbol | Arti |
|--------|------|
| `○` | Mulai / Selesai |
| `□` | Proses |
| `◇` | Keputusan (Ya/Tidak) |
| `→` | Alur |

---

### 📱 Responsive Design

Responsive Design adalah pendekatan desain web yang memastikan tampilan **beradaptasi secara optimal** di berbagai ukuran layar.

**Breakpoints Standar:**

| Breakpoint | Ukuran | Perangkat |
|-----------|--------|-----------|
| XS | < 576px | Mobile kecil |
| SM | 576–768px | Mobile |
| MD | 768–992px | Tablet |
| LG | 992–1200px | Desktop |
| XL | > 1200px | Wide screen |

> **Mobile First**: Desain untuk mobile terlebih dahulu, kemudian *scale up* ke tablet dan desktop.

---

### ♿ Aksesibilitas (Accessibility) dalam Web Design

Web Accessibility (a11y) memastikan website dapat digunakan oleh **semua orang**, termasuk penyandang disabilitas.

**Prinsip POUR / WCAG:**

| Prinsip | Deskripsi | Contoh |
|---------|-----------|--------|
| **Perceivable** | Konten dapat dilihat/didengar semua user | Alt text untuk gambar, caption video |
| **Operable** | Semua fungsi bisa diakses dengan keyboard | Navigasi tanpa mouse |
| **Understandable** | Konten & UI mudah dipahami | Bahasa jelas, instruksi konsisten |
| **Robust** | Kompatibel dengan berbagai browser & teknologi | Screen reader support |

> Standar global: **WCAG 2.1** — Level A, AA, AAA

---

### 🛠️ Tools Populer untuk Web & UI/UX

**Design & Prototyping:** Figma, Adobe XD, Sketch, InVision

**Frontend Development:** VS Code, Chrome DevTools, GitHub, CodePen

**Collaboration:** Miro, Notion, Trello, Slack

**Testing & Analytics:** Google Analytics, Hotjar, Maze, UserTesting

---

### ✅ Best Practices UI/UX Design

| Prinsip | Penjelasan |
|---------|-----------|
| 🔍 **Kenali Pengguna** | Selalu mulai dengan riset — siapa user, apa kebutuhan & pain point-nya |
| 💡 **Keep It Simple (KISS)** | Hindari elemen yang tidak perlu. Setiap elemen harus punya tujuan yang jelas |
| 🔄 **Konsistensi adalah Kunci** | Gunakan pola yang sama untuk komponen serupa agar user tidak perlu belajar ulang |
| 📢 **Feedback yang Jelas** | Selalu beri tahu user apa yang sedang terjadi — loading, error, sukses |
| 📱 **Mobile First** | Desain untuk layar terkecil terlebih dahulu, kemudian *scale* ke layar lebih besar |
| 🔁 **Test & Iterate** | Desain bagus lahir dari banyak iterasi. Uji dengan user nyata, perbaiki, ulangi |

---

## BAGIAN 5: Arsitektur Web: Monolith vs Microservices

### 🏗️ Apa itu Arsitektur Aplikasi?

Arsitektur aplikasi adalah **cara sebuah sistem software dirancang dan diorganisir** — bagaimana komponen-komponen aplikasi disusun, berkomunikasi, dan dikelola. Dua pendekatan yang paling umum adalah **Monolith** dan **Microservices**.

---

### 🧱 Monolithic Architecture

Monolith adalah pendekatan di mana **seluruh aplikasi dibangun sebagai satu kesatuan tunggal** — semua fitur, logika, dan komponen tergabung dalam satu codebase dan di-deploy sebagai satu unit.

```
┌─────────────────────────────────────┐
│           MONOLITH APP              │
│  ┌──────────┐  ┌──────────────────┐ │
│  │  UI /    │  │   Business       │ │
│  │ Frontend │  │   Logic          │ │
│  └──────────┘  └──────────────────┘ │
│  ┌──────────┐  ┌──────────────────┐ │
│  │  Auth    │  │   Payment        │ │
│  │ Module   │  │   Module         │ │
│  └──────────┘  └──────────────────┘ │
│           ┌──────────┐              │
│           │ DATABASE │              │
│           └──────────┘              │
└─────────────────────────────────────┘
```

**Karakteristik Monolith:**
- Satu codebase, satu repository
- Semua modul saling terhubung langsung
- Di-deploy sebagai satu unit
- Satu database terpusat
- Mudah dikembangkan di awal (startup/MVP)

**✅ Kelebihan:**
- Sederhana untuk dikembangkan & di-debug
- Deployment mudah — satu perintah untuk semua
- Performa komunikasi antar modul lebih cepat (in-process)
- Tidak butuh infrastruktur kompleks
- Ideal untuk tim kecil dan project awal

**❌ Kekurangan:**
- Semakin besar = semakin lambat proses development
- Satu bug bisa mematikan seluruh aplikasi
- Sulit scaling bagian tertentu saja
- Teknologi stack harus seragam
- Deploy ulang seluruh aplikasi hanya untuk perubahan kecil

---

### 🔬 Microservices Architecture

Microservices adalah pendekatan di mana aplikasi **dipecah menjadi layanan-layanan kecil yang independen**, masing-masing memiliki tanggung jawab spesifik dan berkomunikasi satu sama lain melalui API atau message queue.

```
             ┌─────────────────┐
             │   API GATEWAY   │
             └────────┬────────┘
                      │
       ┌──────────────┼──────────────┐
       ▼              ▼              ▼
┌─────────────┐ ┌──────────┐ ┌────────────┐
│ AUTH        │ │ PRODUCT  │ │  PAYMENT   │
│ SERVICE     │ │ SERVICE  │ │  SERVICE   │
│  [DB Auth]  │ │ [DB Prod]│ │ [DB Pay]   │
└─────────────┘ └──────────┘ └────────────┘
       ▼              ▼              ▼
┌─────────────┐ ┌──────────┐ ┌────────────┐
│  USER       │ │  ORDER   │ │ NOTIF      │
│  SERVICE    │ │  SERVICE │ │ SERVICE    │
│  [DB User]  │ │ [DB Ord] │ │ [DB Notif] │
└─────────────┘ └──────────┘ └────────────┘
```

**Karakteristik Microservices:**
- Banyak service kecil, masing-masing punya codebase sendiri
- Setiap service punya database sendiri
- Komunikasi via REST API, gRPC, atau Message Queue
- Bisa di-deploy secara independen
- Setiap service bisa menggunakan teknologi berbeda

**✅ Kelebihan:**
- Setiap service bisa di-scale secara independen
- Kegagalan satu service tidak mematikan semua
- Tim berbeda bisa mengerjakan service berbeda secara paralel
- Fleksibilitas teknologi (polyglot programming)
- Deploy lebih cepat dan berisiko lebih rendah

**❌ Kekurangan:**
- Kompleksitas infrastruktur yang tinggi
- Debugging lebih sulit (distributed tracing)
- Komunikasi antar service menambah latency
- Butuh tim yang lebih berpengalaman
- Biaya infrastruktur lebih tinggi

---

### ⚖️ Monolith vs Microservices — Perbandingan Lengkap

| Aspek | 🧱 Monolith | 🔬 Microservices |
|-------|------------|------------------|
| **Codebase** | Satu repository tunggal | Banyak repository terpisah |
| **Database** | Satu database terpusat | Database per service |
| **Deployment** | Deploy satu unit | Deploy per service |
| **Skalabilitas** | Scale seluruh aplikasi | Scale per service |
| **Komunikasi** | In-process (cepat) | Via API/network (ada latency) |
| **Teknologi** | Stack seragam | Polyglot (bebas pilih) |
| **Kompleksitas** | Rendah di awal | Tinggi dari awal |
| **Tim** | Cocok tim kecil | Cocok tim besar/multi-tim |
| **Testing** | Lebih mudah | Lebih kompleks (integration test) |
| **Failure** | Satu titik kegagalan | Isolasi kegagalan |

---

### 🤔 Kapan Menggunakan Masing-Masing?

**Pilih Monolith jika:**
- Produk baru / startup di fase awal (MVP)
- Tim kecil (< 10 developer)
- Belum yakin dengan skala dan kebutuhan sistem
- Budget dan waktu terbatas
- Fitur masih sederhana dan terdefinisi jelas

**Pilih Microservices jika:**
- Aplikasi sudah berskala besar
- Tim besar yang terpisah antar domain
- Membutuhkan skalabilitas tinggi pada bagian tertentu
- Sudah ada pengalaman dengan distributed systems
- Contoh: sistem e-commerce besar, platform streaming, fintech

> 💡 **Saran**: Mulai dengan Monolith yang terstruktur baik ("Modular Monolith"), lalu migrasi ke Microservices jika benar-benar dibutuhkan. Jangan *over-engineer* di awal!

---

### 🌍 Contoh Nyata

| Perusahaan | Awal | Sekarang |
|-----------|------|----------|
| **Netflix** | Monolith (2007) | Microservices (500+ services) |
| **Amazon** | Monolith | Microservices (ribuan services) |
| **Shopify** | Monolith Ruby on Rails | Modular Monolith + beberapa service |
| **Stack Overflow** | Monolith | Masih Monolith! (terbukti scalable) |
| **Tokopedia** | Monolith | Microservices (setelah scale besar) |

> 📌 **Fun fact**: Stack Overflow melayani jutaan request per hari menggunakan arsitektur Monolith. Skalabilitas bukan hanya soal microservices, tapi juga optimasi!

---

### 🛠️ Teknologi Terkait

| Kategori | Tools |
|----------|-------|
| **API Communication** | REST API, GraphQL, gRPC |
| **Message Queue** | RabbitMQ, Apache Kafka, Redis Pub/Sub |
| **Containerization** | Docker, Podman |
| **Orchestration** | Kubernetes (K8s), Docker Compose |
| **API Gateway** | Kong, AWS API Gateway, Nginx |
| **Service Discovery** | Consul, Eureka |
| **Monitoring** | Prometheus, Grafana, Datadog |

---

## 💼 Peluang Karir di Bidang Web & UI/UX

| Posisi | Skills | Estimasi Gaji/Bulan |
|--------|--------|---------------------|
| 🎨 **UI Designer** | Figma, Adobe XD, Tipografi, Desain Grafis | Rp 5–15 juta |
| 👤 **UX Designer** | User Research, Wireframing, Prototyping | Rp 6–18 juta |
| 💻 **Frontend Developer** | HTML, CSS, JavaScript, React/Vue | Rp 6–20 juta |
| 🔗 **Fullstack Developer** | Frontend + Backend + Database | Rp 10–30 juta |
| 🔬 **UX Researcher** | Riset Kualitatif, Statistik, Analitik | Rp 7–20 juta |
| 🚀 **Product Designer** | UI + UX + Strategy + Data | Rp 12–35 juta |

---

## 📌 Ringkasan Materi

| Topik | Inti Materi |
|-------|------------|
| 🌐 **World Wide Web** | Sistem dokumen terhubung via HTTP. Internet ≠ Web. |
| 💻 **Teknologi Web** | HTML = Struktur, CSS = Tampilan, JavaScript = Interaksi. Ketiganya wajib untuk web modern. |
| 🖥️ **UI Design** | Visual & estetika produk — warna, tipografi, layout, ikon. Prinsip: konsistensi, hierarki, kontras. |
| 👤 **UX Design** | Pengalaman pengguna — riset, persona, flow, kemudahan. UI = CARA TERLIHAT vs UX = CARA TERASA. |
| 📐 **Wireframe** | Sketsa struktur halaman tanpa visual final. Lo-Fi → Mid-Fi → Hi-Fi. Tools: Figma, Balsamiq, Sketch. |
| 🔗 **Prototype** | Simulasi interaktif produk. Alat validasi sebelum development. User Testing untuk iterasi. |

---

## ❓ Kuis & Latihan

**Diskusi:**
1. Apa perbedaan utama antara Internet dan World Wide Web?
3. Apa yang dimaksud dengan User Persona dan mengapa penting?
4. Jelaskan perbedaan UI dan UX dengan analogi sehari-hari!

**Tertulis:**
2. Sebutkan 3 fungsi berbeda dari HTML, CSS, dan JavaScript!

**Praktik:**
5. Buatlah wireframe sederhana homepage toko online di kertas!

---

## 📚 Referensi & Sumber Belajar

**📖 Dokumentasi Resmi:**
- [MDN Web Docs](https://developer.mozilla.org) — Referensi HTML, CSS, JS terlengkap
- [web.dev](https://web.dev) — Best practices dari Google
- [figma.com/resources](https://figma.com/resources) — Tutorial & template Figma

**🎓 Platform Belajar:**
- [freecodecamp.org](https://freecodecamp.org) — Belajar web gratis & terstruktur
- [theodinproject.com](https://theodinproject.com) — Kurikulum fullstack gratis
- [uxplanet.org](https://uxplanet.org) — Artikel UX design terbaik
- [interaction-design.org](https://interaction-design.org) — Kursus UX profesional

**📱 Inspirasi Desain:**
- [dribbble.com](https://dribbble.com) — Portofolio desain UI terbaik
- [behance.net](https://behance.net) — Showcase proyek desain global
- [mobbin.com](https://mobbin.com) — Pattern & UI reference mobile app
- [awwwards.com](https://awwwards.com) — Website terbaik dunia

**📺 YouTube:**
- Traversy Media — Tutorial web development
- Kevin Powell — CSS terbaik & terdalam
- DesignCourse — UI/UX & Frontend
- Google UX Design — Kursus resmi Google

---

> *"Design is not just what it looks like and feels like. Design is how it works."*
> — **Steve Jobs**
