class PulsaPurchase {
  constructor() {
    this.operator = '';
    this.nominal = 0;
    this.detailElement = document.getElementById('detail-pembelian');
  }

  selectOperator(op) {
    this.operator = op;
    this.updateDetailElement(`Operator: ${op}`);
  }

  selectNominal(nom) {
    this.nominal = nom;
    this.updateDetailElement(`Nominal: Rp ${nom}`, true);
  }

  updateDetailElement(text, append = false) {
    if (append) {
      this.detailElement.innerHTML += `<br>${text}`;
    } else {
      this.detailElement.innerHTML = text;
    }
  }

  processPurchase() {
    if (!this.operator || !this.nominal) {
      alert('Silakan pilih operator dan nominal terlebih dahulu!');
    } else {
      alert(`Pembelian pulsa ${this.operator} sebesar Rp ${this.nominal} berhasil!`);
    }
  }
}

const pulsaPurchase = new PulsaPurchase();