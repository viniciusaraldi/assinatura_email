
const btnAssinatura = document.querySelector('#downloadoAssinatura');
btnAssinatura.addEventListener('click', () => {
    const boxAssinatura = document.querySelector('.box__assinatura__show');
    // const nomeColaborador = document.querySelector('[data-name]').dataset.name;
    // const limpaEspaco = nomeColaborador.replaceAll(' ', '').toLowerCase();
    html2canvas(boxAssinatura).then(function (canvas) {
        const imageData = canvas.toDataURL('image/png');

        const link = document.createElement('a');
        link.href = imageData;
        link.download = `assinatura@.png`;
        
        // link.download = `assinatura@${limpaEspaco}.png`;
        document.body.appendChild(link);
        link.click();

        document.body.removeChild(link);
    });
});
