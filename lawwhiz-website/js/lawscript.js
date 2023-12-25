const laws = [
    { title: "The Special Marriage Act, 1872", pdfUrl: "http://bdlaws.minlaw.gov.bd/act-details-25.html" },
    { title: "The Abandoned Buildings (Supplementary Provisions) Ordinance, 1985", pdfUrl: "http://bdlaws.minlaw.gov.bd/act-print-693.html" },
    { title: "The Christian Marriage Act, 1872", pdfUrl: "http://bdlaws.minlaw.gov.bd/act-27.html" },
    { title: "The Abandoned Buildings (Supplementary Provisions) Ordinance, 1985", pdfUrl: "http://bdlaws.minlaw.gov.bd/act-print-693.html" },
    { title: "The Special Marriage Act, 1872", pdfUrl: "http://bdlaws.minlaw.gov.bd/act-details-25.html" },
    { title: "The Abandoned Buildings (Supplementary Provisions) Ordinance, 1985", pdfUrl: "http://bdlaws.minlaw.gov.bd/act-print-693.html" },
    { title: "The Special Marriage Act, 1872", pdfUrl: "http://bdlaws.minlaw.gov.bd/act-details-25.html" },
    { title: "The Abandoned Buildings (Supplementary Provisions) Ordinance, 1985", pdfUrl: "http://bdlaws.minlaw.gov.bd/act-print-693.html" },
    // Add more laws with their PDF URLs
];

const lawList = document.getElementById('law-list');

// Populate the law list
laws.forEach((law, index) => {
    const lawItem = document.createElement('li');
    lawItem.innerHTML = `
        <a href="${law.pdfUrl}" target="_blank">${law.title}</a>
        
    `;
    lawItem.classList.add('list-group-item');
    lawList.appendChild(lawItem);
});
