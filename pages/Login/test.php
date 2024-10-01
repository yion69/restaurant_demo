<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles.css">
</head>

<body class="body">

    <?php
    include_once('../../Controller/__dbconnect.class.php');
    include_once('../../Controller/__config.class.php');
    include_once('../../Controller/__foodItem.php');

    session_start();
    $con = new Connection_Localhost();
    $db = new DataBase();
    $fb = new FoodItem();
    // $fb->insertFoodItem();
    ?>
    <h3 class="this"></h3>

    <script>
        function insertBuyButtonSVG() {
            const button = document.createElement('button');
            button.className = 'div-button-buy';

            const svgNS = "http://www.w3.org/2000/svg";
            const svg = document.createElementNS(svgNS, 'svg');
            svg.setAttribute('xmlns', svgNS);
            svg.setAttribute('width', '18');
            svg.setAttribute('height', '18');
            svg.setAttribute('viewBox', '0 0 24 24');
            svg.setAttribute('fill', 'none');
            svg.setAttribute('stroke', 'currentColor');
            svg.setAttribute('stroke-width', '2');
            svg.setAttribute('stroke-linecap', 'round');
            svg.setAttribute('stroke-linejoin', 'round');
            svg.classList.add('lucide', 'lucide-circle-plus');

            const circle = document.createElementNS(svgNS, 'circle');
            circle.setAttribute('cx', '12');
            circle.setAttribute('cy', '12');
            circle.setAttribute('r', '10');

            const path1 = document.createElementNS(svgNS, 'path');
            path1.setAttribute('d', 'M8 12h8');

            const path2 = document.createElementNS(svgNS, 'path');
            path2.setAttribute('d', 'M12 8v8');

            svg.appendChild(circle);
            svg.appendChild(path1);
            svg.appendChild(path2);

            return svg
        }

        function insertRatingSVG() {
            const button = document.createElement('button');
            button.className = 'your-button-class';

            const svgNS = "http://www.w3.org/2000/svg";
            const starSvg = document.createElementNS(svgNS, 'svg');
            starSvg.setAttribute('xmlns', svgNS);
            starSvg.setAttribute('class', 'size-6');
            starSvg.setAttribute('viewBox', '0 1 25 25');
            starSvg.setAttribute('fill', 'none');
            starSvg.setAttribute('stroke', 'currentColor');
            starSvg.setAttribute('stroke-width', '2');
            starSvg.setAttribute('stroke-linecap', 'round');
            starSvg.setAttribute('stroke-linejoin', 'round');
            starSvg.classList.add('lucide', 'lucide-star');
            const polygon = document.createElementNS(svgNS, 'polygon');
            polygon.setAttribute('points', '12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2');

            starSvg.appendChild(polygon);

            return starSvg
        }

        function insertOrderSVG() {
            const button = document.createElement('button');
            button.className = 'your-button-class';

            const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
            svg.setAttribute("xmlns", "http://www.w3.org/2000/svg");
            svg.setAttribute("class", "size-6 lucide lucide-shopping-bag");
            svg.setAttribute("viewBox", "0 0 26 26");
            svg.setAttribute("fill", "none");
            svg.setAttribute("stroke", "currentColor");
            svg.setAttribute("stroke-width", "2");
            svg.setAttribute("stroke-linecap", "round");
            svg.setAttribute("stroke-linejoin", "round");

            const path1 = document.createElementNS("http://www.w3.org/2000/svg", "path");
            path1.setAttribute("d", "M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z");

            const path2 = document.createElementNS("http://www.w3.org/2000/svg", "path");
            path2.setAttribute("d", "M3 6h18");

            const path3 = document.createElementNS("http://www.w3.org/2000/svg", "path");
            path3.setAttribute("d", "M16 10a4 4 0 0 1-8 0");

            svg.appendChild(path1);
            svg.appendChild(path2);
            svg.appendChild(path3)

            return svg
        }

        function insertTimeSVG() {
            const button = document.createElement('button');
            button.className = 'your-button-class';

            const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
            svg.setAttribute("xmlns", "http://www.w3.org/2000/svg");
            svg.setAttribute("width", "17");
            svg.setAttribute("height", "17");
            svg.setAttribute("viewBox", "0 0 24 24");
            svg.setAttribute("fill", "none");
            svg.setAttribute("stroke", "currentColor");
            svg.setAttribute("stroke-width", "2");
            svg.setAttribute("stroke-linecap", "round");
            svg.setAttribute("stroke-linejoin", "round");
            svg.setAttribute("class", "lucide lucide-clock-9");

            const circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
            circle.setAttribute("cx", "12");
            circle.setAttribute("cy", "12");
            circle.setAttribute("r", "10");

            const polyline = document.createElementNS("http://www.w3.org/2000/svg", "polyline");
            polyline.setAttribute("points", "12 6 12 12 7.5 12");

            svg.appendChild(circle);
            svg.appendChild(polyline);

            return svg
        }
        
        function convertBlobToBase64(blob) {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                
                reader.onloadend = () => {
                    const base64String = reader.result;
                    console.log(base64String);
                    resolve(base64String);
                };
                
                reader.onerror = (error) => {
                    reject(error);
                };
                // reader.readAsBinaryString(blob);
                reader.readAsDataURL(blob);
            });
        }    

        function createItemElement(data) {
            const fragment = document.createDocumentFragment();

            const box = document.createElement('div');
            box.classList.add('box');

            const divImg = document.createElement('div');
            divImg.className = 'div-img-container';
            const img = document.createElement('img');
            img.className = 'div-img';
            img.src = `data:image/jpeg;base64,${data.food_photo}`;
            img.alt = data.imgAlt || 'food image';
            divImg.appendChild(img);

            box.appendChild(divImg);

            //Parent Container
            const divContainer = document.createElement('div');
            divContainer.className = 'div-container';

            const header = document.createElement('h1');
            header.className = 'div-header';
            const spanHeader = document.createElement('span');
            spanHeader.textContent = data.food_name;
            header.appendChild(spanHeader);

            divContainer.appendChild(header);

            //Info Container
            const divInfoContainers = document.createElement('div');
            divInfoContainers.className = 'div-info-containers';

                const divInfo1 = document.createElement('div');
                divInfo1.className = 'div-info-1';
                    const svg1 = insertOrderSVG();
                    const infoP1 = document.createElement('p');
                    infoP1.className = 'info-p-1';
                    infoP1.textContent = `${data.food_orderCount} Orders`;
                divInfo1.appendChild(svg1);
                divInfo1.appendChild(infoP1);

                const divInfo2 = document.createElement('div');
                divInfo2.className = 'div-info-2';
                    const svg2 = insertRatingSVG();
                    const infoP2 = document.createElement('p');
                    infoP2.className = 'info-p-2';
                    infoP2.textContent = `${data.food_rating} Rating`;
                divInfo2.appendChild(svg2);
                divInfo2.appendChild(infoP2);

            divInfoContainers.appendChild(divInfo1);
            divInfoContainers.appendChild(divInfo2);

            //Tag Container
            const divTagContainers = document.createElement('div');
            divTagContainers.className = 'div-tag-containers';

                const divTag1 = document.createElement('div');
                divTag1.className = 'div-tag-1';
                    const spanTag1 = document.createElement('span');
                    spanTag1.className = 'tag-1-span';
                    spanTag1.textContent = data.food_category;
                divTag1.appendChild(spanTag1);

                const divTag2 = document.createElement('div');
                divTag2.className = 'div-tag-2';
                    const spanTag2 = document.createElement('span');
                    spanTag2.className = 'tag-2-span';
                    spanTag2.textContent = `${data.food_preparationTime} mins`;
                    const spanSVG = insertTimeSVG();
                divTag2.appendChild(spanSVG);
                divTag2.appendChild(spanTag2);

            divTagContainers.appendChild(divTag1);
            divTagContainers.appendChild(divTag2);

            //Lower Container
            const divLowerContainer = document.createElement('div');
            divLowerContainer.className = 'div-lower-container';

                const price = document.createElement('p');
                price.className = 'div-price';
                price.textContent = `MMK ${data.food_price}`;

                const buttonBuy = document.createElement('button');
                buttonBuy.className = 'div-button-buy';
                const buttonSpan = document.createElement('span');
                buttonSpan.textContent = 'Add to cart';
                buttonBuy.appendChild(insertBuyButtonSVG());
                buttonBuy.appendChild(buttonSpan);

                const description = document.createElement('p');
                description.className = 'div-description';
                description.textContent = data.food_description;
                description.setAttribute("hidden", true);

            divLowerContainer.appendChild(price);
            divLowerContainer.appendChild(buttonBuy);

            //Parent Container's Append
            divContainer.appendChild(divInfoContainers);
            divContainer.appendChild(divTagContainers);
            divContainer.appendChild(divLowerContainer);

            box.appendChild(divContainer);

            fragment.appendChild(box);

            return fragment;
        }

        const one = document.querySelector('.this');
        const fragement = new DocumentFragment;


        const createDiv = (index, element) => {
            const div = document.createElement('div');
            const p = document.createElement('p');
            const br = document.createElement("br");
            p.textContent = index + " | " + element;
            div.append(p);
            div.append(br);
            fragement.append(p, br);
        }

        fetch("../../Controller/__foodItem.php", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    'method': "all"
                })
            })
            .then(res => res.json())
            .then(data => {
                data.forEach(element => {
                    console.log(element);
                })
            })
            .catch(error => console.error(error));
    </script>
</body>

</html>