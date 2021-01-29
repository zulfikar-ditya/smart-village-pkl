<?php
/* @var $this yii\web\View */

// $this->title = 'My Yii Application';
?>
<link rel="stylesheet" href="css/index.css">
<div class="site-index">

    <section class="about" id="about">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center flex-column text-center">
                <div class="col-md-12 align-self-center">
                    <span class="text-jumbotron text-delay">Smart Village</span>
                    <div class="animate-text">
                        <hr>
                        <span>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque corporis recusandae cupiditate tempora mollitia esse debitis excepturi nisi natus? Velit assumenda vero nulla dolorum doloremque sit, optio nihil incidunt aperiam?
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pembangunan text-center" id="pembangunan" aos="fade">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-md-3 align-self-center shadow" data-aos="fade-up">
                    <div class="card">
                        <div class="card-header">
                            <img class="card-img-icon" src="../web/images/icon/iconmonstr-map-8-240 (1).png">
                        </div>
                        <div class="card-body">
                            <h4>Pemetaan Pembangunan</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 align-self-center shadow" data-aos="fade-up">
                    <div class="card">
                        <div class="card-header">
                            <img class="card-img-icon" src="../web/images/icon/iconmonstr-banknote-11-240.png">
                        </div>
                        <div class="card-body">
                            <h4>Tranparansi Dana</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 align-self-center shadow" data-aos="fade-up">
                    <div class="card">
                        <div class="card-header">
                            <img class="card-img-icon" src="../web/images/icon/iconmonstr-construction-29-240.png">
                        </div>
                        <div class="card-body">
                            <h4>Pemerataan Pembangunan</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <section class="pelayanan" id="layanan" data-aos="zoom-in">

        <div class="container">
            <div class="text-center mb-5 pt-5">
                <h2>Layanan</h2>
                <hr>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
            </div>
            <div class="row justify-content-center align-items-center">
    
                <div class="col-md-3 m-2 shadow bg-white" data-aos="fade-down">
                    <div class="row align-items-center">
                        <div class="col-md-4 align-self-center p-3">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yNCAyM2gtMjBjLTIuMjA4IDAtNC0xLjc5Mi00LTR2LTE1LjY5NGMuMzEzLTEuMDcxIDEuMjg1LTIuMzA2IDMtMi4zMDYgMS44NTUgMCAyLjc2OSAxLjM0MiAyLjk5NSAyLjMxMmwuMDA1IDEuNjg4aDE4djE4em0tMi0xNmgtMTZ2MTFzLS41ODctMS0xLjkyMi0xYy0xLjEwNCAwLTIuMDc4Ljg5Ni0yLjA3OCAycy44OTYgMiAyIDJoMTh2LTE0em0tMiAxMmgtMTJ2LTEwaDEydjEwem0tOC05aC0zdjhoMTB2LThoLTZ2M2g2djFoLTJ2M2gtMXYtM2gtM3YzaC0xdi03eiIvPjwvc3ZnPg==">
                        </div>
                        <div class="col-md-8">
                            <h5>Data Pembangunan</h5>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3 m-2 shadow bg-white" data-aos="fade-down">
                    <div class="row align-items-center">
                        <div class="col-md-4 align-self-center p-3">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMCAxNS41NjJsMS45MzItNy41NjIgMy41MjYuODkxLTEuOTc0IDcuNTYyLTMuNDg0LS44OTF6bTE4LjQxNS45MDJjLjEyNS4yODcuMTg3LjU5OC4xNTUuOTEtLjA3OS44MjktLjY5OCAxLjQ0OC0xLjQ1NyAxLjYwMi0uMjU0LjUzMy0uNzMzLjg4Ny0xLjI4NSAxLjAwMi0uMjQ0LjUxMi0uNzIyLjg5LTEuMjk2IDEuMDEtLjMyNS42NjgtLjk3IDEuMDEyLTEuNjc0IDEuMDEyLS41MTYgMC0xLjAwNC0uMTgzLTEuMzU2LS41MzgtLjkyOC40MDQtMS45MDItLjA0OC0yLjIzMi0uODYzLS41OTYtLjA2OC0xLjEwNy0uNDUyLTEuMzMyLS45OTctLjU5OS0uMDcxLTEuMTE0LS40NTgtMS4zNC0xLjAwMy0xLjE4OC0uMTM4LTEuODQ4LTEuNDQtMS4xOTgtMi40OTUtLjIzMy0uMDU4LS40OTQtLjEwNC0uNzUxLS4xNTJsLjM4My0xLjQ2NGMuNTI0LjEgMS4wMS4yMTkgMS40NTMuMzU4LjkxMy0uNjU1IDIuMTUxLS4yOTUgMi41NDkuNjc5LjYwOC4wNjkgMS4xMTYuNDY0IDEuMzM0IDEgLjU5OC4wNjggMS4xMTEuNDUxIDEuMzM1Ljk5OC43MzguMDgyIDEuMzYuNjUzIDEuNDQ5IDEuNDM0bC4wMDIuMjI1LjQ1LjQwMmMuMjUyLjI5MS42OC4zMjQuOTYuMTA2LjI4Ni0uMjIzLjMyNC0uNjI0LjA3NS0uOTA5bC0xLjQ1Ny0xLjI3OWMtLjE1Ny0uMTM5LjA1Mi0uMzguMjEzLS4yNDFsMS40OTEgMS4zMDhjLjI1Ny4yOTQuNjkyLjMzMi45NjkuMTE0LjI4NS0uMjIuMzE2LS42MzEuMDY4LS45MTZsLTEuODk2LTEuNjI4Yy0uMTYyLS4xMzUuMDQ4LS4zOC4yMDgtLjI0MmwxLjk0NCAxLjY2OWMuMjQ4LjI4Mi42NzguMzM1Ljk2Ny4xMTQuMjgzLS4yMi4zNDktLjYwNi0uMDAyLS45OTUtMS4yNC0xLjExMi0yLjY3MS0yLjQwNS00LjE0My0zLjc5Ni0uMzU1LjQ4OC0yLjE3NiAxLjUwMi0zLjI3OSAxLjUwMnMtMS43NzktLjY3NS0xLjk2LTEuMzQzYy0uMTU3LS41ODIuMDUxLTEuMTM5LjUzMS0xLjQxOS41MzUtLjMxMyAxLjA1NS0uNzYyIDEuNTYyLTEuMjY5LS43ODktLjU4Ni0xLjIwMy0uMzk4LTIuMDY3LjAxMy0uNTAzLjIzOC0xLjEuNTIxLTEuODU0LjY0N2wuNDM4LTEuNjdjMS4zMjctLjQ4OCAyLjU0OS0xLjYwOCA0LjUwNS0uMDgzbC40OTEtLjU1MmMuMzk1LS40NDcuOTExLS43MTUgMS41MDMtLjcxNS40MzYgMCAuOTEuMTYxIDEuNDA4LjQxNyAxLjUxOC43OTMgMi4yOTMgMS4yNTYgMy40NDMgMS4yOTRsLjM5NCAxLjUwOGgtLjAwOGMtMS43OTcuMDMzLTIuNjc2LS41MDgtNC41MTYtMS40Ny0uNTEzLS4yNjMtLjg1OS0uMzE4LTEuMS0uMDQ0LS45ODQgMS4xMi0yLjAzMSAyLjMwOS0zLjE5MiAzLjA2My41NzMuNDU4IDIuMDE5LS40NTggMi41OTItLjkyLjI1LS4yMDEuNjM4LS40NjggMS4xMjgtLjQ2OC41NTMgMCAuOTU1LjMzMSAxLjI0NC42MTkuNjguNjggMi41NyAyLjM4OSAzLjQwNyAzLjE0Mi40MzQtLjI0Mi44NjgtLjQzNSAxLjMxMS0uNjA1bC4zODMgMS40NjdjLS4zMTkuMTM0LS42MzMuMjg2LS45NS40NjF6bS0xMS4wMzcuODc1bC42MDktLjc0N2MuMjUtLjMuMjE1LS43MjItLjA4LS45NDQtLjI5Ni0uMjIzLS43MzctLjE1OC0uOTg2LjE0bC0uNjEuNzQ5Yy0uMjUxLjI5OC0uMjE0LjcyMS4wOC45NDJzLjczNy4xNTkuOTg3LS4xNHptMS4zMjggMS4wMDZsLjYxNy0uNzU1Yy4yNDgtLjI5Ny4yMTMtLjcyMi0uMDgyLS45NDMtLjI5NC0uMjIxLS43MzQtLjE1OS0uOTg0LjE0MmwtLjYxNi43NTRjLS4yNTEuMy0uMjEuNzEyLjA4Ni45MzYuMjk3LjIyMi43MjkuMTY3Ljk3OS0uMTM0em0xLjM0My45OTJsLjYwOC0uNzQ3Yy4yNTEtLjI5OS4yMTUtLjcyMS0uMDgtLjk0NC0uMjk2LS4yMjItLjczNS0uMTU3LS45ODYuMTQybC0uNjA5Ljc0NWMtLjI1MS4zLS4yMTMuNzI0LjA4Mi45NDUuMjkzLjIyMS43MzQuMTYuOTg1LS4xNDF6bTEuODY1LS42OTFjLS4yOTQtLjIyNC0uNzM1LS4xNTktLjk4Ny4xMzlsLS42MTIuNzUxYy0uMjQ5LjI5OS0uMjEzLjcyMi4wODIuOTQzLjI5NS4yMjEuNzM1LjE2Ljk4Ni0uMTQybC42MS0uNzVjLjI1My0uMjk3LjIxNy0uNzItLjA3OS0uOTQxem0xLjQyNyAxLjEzNGwtLjI0LS4yMTJjLS4wNjMuMjM5LS4xNzMuNDY0LS4zMzIuNjVsLS4zNTguNDQxYy4xMzMuMTA2LjI4OC4xNzYuNDQ4LjE3Ni4xNDkgMCAuMjk1LS4wNDYuNDE1LS4xMzguMjg0LS4yMjMuMzE3LS42MzIuMDY3LS45MTd6bTUuMjAxLTEwLjg4OWwxLjk3NCA3LjU2MiAzLjQ4NC0uODkxLTEuOTMyLTcuNTYyLTMuNTI2Ljg5MXptLTcuOTU5LTYuODkxbC0uOTg2LjE3NC41MjEgMi45NTQuOTg0LS4xNzQtLjUxOS0yLjk1NHptMy44Mi4xNzRsLS45ODUtLjE3NC0uNTIxIDIuOTU0Ljk4NS4xNzQuNTIxLTIuOTU0em0zLjU5NyAxLjIyOGwtLjg2Ny0uNS0xLjUgMi41OTguODY3LjUgMS41LTIuNTk4em0tMTEuMTMzLS41bC0uODY3LjUgMS41IDIuNTk4Ljg2Ny0uNS0xLjUtMi41OTh6Ii8+PC9zdmc+">
                        </div>
                        <div class="col-md-8">
                            <h5>Mitra Pembangunan</h5>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3 m-2 shadow bg-white" data-aos="fade-down">
                    <div class="row align-items-center">
                        <div class="col-md-4 align-self-center p-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTIgMGMtMy4xNDggMC02IDIuNTUzLTYgNS43MDIgMCA0LjY4MiA0Ljc4MyA1LjE3NyA2IDEyLjI5OCAxLjIxNy03LjEyMSA2LTcuNjE2IDYtMTIuMjk4IDAtMy4xNDktMi44NTEtNS43MDItNi01LjcwMnptMCA4Yy0xLjEwNSAwLTItLjg5NS0yLTJzLjg5NS0yIDItMiAyIC44OTUgMiAyLS44OTUgMi0yIDJ6bTEyIDE2bC02LjcwNy0yLjQyNy01LjI5MyAyLjQyNy01LjU4MS0yLjQyNy02LjQxOSAyLjQyNyA0LTkgMy45Ni0xLjU4NGMuMzguNTE2Ljc0MSAxLjA4IDEuMDYxIDEuNzI5bC0zLjUyMyAxLjQxLTEuNzI1IDMuODggMi42NzItMS4wMSAxLjUwNi0yLjY4Ny0uNjM1IDMuMDQ0IDQuMTg5IDEuNzg5LjQ5NS0yLjAyMS40NjUgMi4wMjQgNC4xNS0xLjg5LS42MTgtMy4wMzMgMS41NzIgMi44OTYgMi43MzIuOTg5LTEuNzM5LTMuOTc4LTMuNTgxLTEuNDE1Yy4zMTktLjY1LjY4MS0xLjIxNSAxLjA2Mi0xLjczMWw0LjAyMSAxLjU4OCAzLjkzNiA5eiIvPjwvc3ZnPg==">
                        </div>
                        <div class="col-md-8">
                            <h5>Pemetaan Pembangunan</h5>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3 m-2 shadow bg-white" data-aos="fade-left">
                    <div class="row align-items-center">
                        <div class="col-md-4 align-self-center p-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTUuMDEgOS45NjhsLTMuOTYxLTMuOTY4aDEuOTY4cy45OTEtNC4xNzgtMi45ODUtNmM2LjE5MS4yMjIgNi45NzIgNiA2Ljk3MiA2aDEuOTY4bC0zLjk2MiAzLjk2OHptOC45OS0xLjkyM3YxMC44M2wtOSA1LjEyNXYtMTEuMTMybDktNC44MjN6bS01Ljk1OSA5LjM4OGwtLjM1LjE5OXYxLjcxM2wuMzUtLjE5NXYtMS43MTd6bS41ODQtLjMzM2wtLjM0NC4xOTV2MS43MTdsLjM0NC0uMTk1di0xLjcxN3ptLjgyLS40NjhsLS4zNDMuMTk2djEuNzE3bC4zNDMtLjE5NnYtMS43MTd6bS41NzUtLjMyNmwtLjM0Mi4xOTV2MS43MTdsLjM0Mi0uMTk1di0xLjcxN3ptLjU4NC0uMzMzbC0uMzQ5LjE5OXYxLjcxN2wuMzQ5LS4xOTl2LTEuNzE3em0uODQ0LS40ODFsLS4zNDMuMTk1djEuNzE3bC4yODktLjE2NS4wNTQtLjAzMXYtMS43MTZ6bS0xMC44NTEtMTIuNTM0Yy0uMzMxLS42MjktMS4wODEtMS4zNDgtMS43Mi0xLjMyNmwtNC42MDQgMi42IDEuOTkyIDEuMTcxIDQuMzMyLTIuNDQ1em0yLjM3MiA4LjcwOWwtMTAuMDk0LTUuOTM4LTIuODc1IDMuOTEgMTAuMTA4IDUuOTk3IDIuODYxLTMuOTY5em0tMTAuOTY5IDEuNDg0djQuMjk4bDExIDYuMjY1di04LjY3bC0yLjMzOSAzLjI0NS04LjY2MS01LjEzOHoiLz48L3N2Zz4=">
                        </div>
                        <div class="col-md-8">
                            <h5>Lapor Aduan</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 m-2 shadow bg-white" data-aos="fade-left">
                    <div class="row align-items-center">
                        <div class="col-md-4 align-self-center p-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yLjE3OCAxMWgtMS4xNzh2LTIuMjA5Yy40NjggMCAuNzc0LS40NzQuOTQ0LS45OTcuNTg3LTEuODAzIDEuNTktNC41MTMgNC4wNTYtNi4yMTJ2My40MThjMCAuNTUyLjQ0OCAxIDEgMXMxLS40NDggMS0xdi00LjQzN2MuODY4LS4zMDkgMS44NjEtLjUxNiAzLS41ODV2My4wMjJjMCAuNTUyLjQ0OCAxIDEgMXMxLS40NDggMS0xdi0zYzEuMTM0LjA5NCAyLjEyOC4zMjcgMyAuNjYxdjQuMzM5YzAgLjU1Mi40NDggMSAxIDFzMS0uNDQ4IDEtMXYtMy4yNjljMi4zOTEgMS43IDMuNDYzIDQuMzA0IDQuMDU3IDYuMDYzLjE3NS41Mi40NzUuOTk3Ljk0My45OTd2Mi4yMDloLTEuMTc5Yy41NzUuNDU5IDEuMTc5IDEuMzYgMS4xNzkgMy4xMzEgMCAxLjYzLS45MDQgMy42ODYtMi44NzcgNC41MzEtMi4xNTMgMy40NDUtNS4wMjcgNS4zMzgtOC4xMjMgNS4zMzgtMy4wOTYgMC01Ljk3LTEuODkzLTguMTI0LTUuMzM4LTEuOTczLS44NDUtMi44NzYtMi45MDEtMi44NzYtNC41MzEgMC0xLjc3MS42MDMtMi42NzIgMS4xNzgtMy4xMzF6bTEyLjAyMiA3LjQ1OWgtNC40Yy4wMDQuMDEyLjYyNiAxLjc0IDIuMiAxLjc0IDEuNjM0IDAgMi4xOTYtMS43MjggMi4yLTEuNzR6bTQuNTE3LTcuNDU5aC0xMy40MzVsLS4wMTMuNTE1YzAgLjY2OC0uNjgyIDEuMTE0LTEuMjg4Ljg0NC0uMTY5LS4wNzUtLjQzLS4wNzMtLjYxNy4wNDktLjkxNy42MDEtLjgxOSAzLjg2NCAxLjQyNSA0LjYyOS45MTYuMzEzIDIuMzY0IDMuMTAzIDMuOTMuMzk4LjU0Mi0uOTM0IDIuMjUxLTEuMDM5IDMuMjgxLS4yOTcgMS4wMjktLjc0MiAyLjczOS0uNjM3IDMuMjguMjk3IDEuNTY2IDIuNzA1IDMuMDE0LS4wODUgMy45My0uMzk4IDIuMjQ0LS43NjUgMi4zNDItNC4wMjggMS40MjUtNC42MjktLjIxNS0uMTQtLjQ4Ny0uMTA2LS42MTYtLjA0OS0uNjA2LjI3MS0xLjI4OS0uMTc2LTEuMjg5LS44NDRsLS4wMTMtLjUxNXptLTkuNjk2Ljk5NmMtLjYzNCAwLTEuMTQ2LjYyLTEuMTQ2IDEuMzg1cy41MTIgMS4zODUgMS4xNDYgMS4zODVjLjYzMiAwIDEuMTQ2LS42MiAxLjE0Ni0xLjM4NXMtLjUxNC0xLjM4NS0xLjE0Ni0xLjM4NXptNy4xMDQgMS4zODVjMCAuNzY1LS41MTMgMS4zODUtMS4xNDYgMS4zODUtLjYzMyAwLTEuMTQ2LS42Mi0xLjE0Ni0xLjM4NXMuNTEzLTEuMzg1IDEuMTQ2LTEuMzg1Yy42MzMgMCAxLjE0Ni42MiAxLjE0NiAxLjM4NXoiLz48L3N2Zz4=">
                        </div>
                        <div class="col-md-8">
                            <h5>Request Pembangunan</h5>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3 m-2 shadow bg-white" data-aos="fade-left">
                    <div class="row align-items-center">
                        <div class="col-md-4 align-self-center p-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMjEuMTY5IDE5Ljc1NGMuNTIyLS43OS44MzEtMS43MzUuODMxLTIuNzU0IDAtMi43NjEtMi4yMzgtNS01LTVzLTUgMi4yMzktNSA1IDIuMjM4IDUgNSA1YzEuMDE5IDAgMS45NjQtLjMwOSAyLjc1NS0uODMybDIuODMxIDIuODMyIDEuNDE0LTEuNDE0LTIuODMxLTIuODMyem0tNC4xNjkuMjQ2Yy0xLjY1NCAwLTMtMS4zNDYtMy0zczEuMzQ2LTMgMy0zIDMgMS4zNDYgMyAzLTEuMzQ2IDMtMyAzem0tNC44OSAyaC03LjExbDIuNTk5LTNoMi42OTZjLjM0NSAxLjE1Mi45NzYgMi4xOCAxLjgxNSAzem0tMi4xMS01aC0xMHYtMTdoMjJ2MTIuMTFjLS41NzQtLjU4Ni0xLjI1MS0xLjA2OC0yLTEuNDI1di04LjY4NWgtMTh2MTNoOC4yOTVjLS4xOS42MzQtLjI5NSAxLjMwNS0uMjk1IDJ6bS0yLjEzMS00LjM3MmwuOTQ1LTUuNzU5Ljk2NSA0LjE0NWMuMDk2LjQyNS42ODYuNDczLjg0Ny4wNjNsLjg5NS0yLjMyOC40NzkuOTc0Yy4wOC4xNjkuMTY0LjI3Ny40MzguMjc3aDEuMjA4di0uODc3aC0uOTIxbC0uODM2LTEuNjI0Yy0uMTU2LS4zNjQtLjY3Ny0uMzU2LS44Mi4wMTRsLS43NDEgMS44OTUtMS4xNDQtNS4wNjJjLS4wNTItLjIzMi0uMjQyLS4zNDYtLjQzLS4zNDYtLjIgMC0uNC4xMjctLjQ0LjM3M2wtLjk0OCA1Ljg0Ny0uOTY5LTMuNmMtLjEwOS0uNDMtLjcxNS0uNDU1LS44NTMtLjAyOWwtLjcyMSAyLjU0NWgtLjgyM3YuODY0aDEuMTcyYy4xNiAwIC4zMzQtLjEzLjM4LS4yODRsLjQwNi0xLjI1NyAxLjA0MyA0LjIwNmMuMTE3LjQ2OC43OTEuNDM3Ljg2OC0uMDM3eiIvPjwvc3ZnPg==">
                        </div>
                        <div class="col-md-8">
                            <h5>Monitoring Pembangunan</h5>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3 m-2 shadow bg-white" data-aos="fade-right">
                    <div class="row align-items-center">
                        <div class="col-md-4 align-self-center p-3">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTcgMTJjLTMuMzEzIDAtNiAyLjY4Ny02IDZzMi42ODcgNiA2IDYgNi0yLjY4NyA2LTYtMi42ODctNi02LTZ6bS41IDguNDc0di41MjZoLS41di0uNDk5Yy0uNTE4LS4wMDktMS4wNTMtLjEzMi0xLjUtLjM2M2wuMjI4LS44MjJjLjQ3OC4xODYgMS4xMTQuMzgzIDEuNjEyLjI3LjU3NC0uMTMuNjkyLS43MjEuMDU3LTEuMDA1LS40NjUtLjIxNy0xLjg4OS0uNDAyLTEuODg5LTEuNjIyIDAtLjY4MS41Mi0xLjI5MiAxLjQ5Mi0xLjQyNXYtLjUzNGguNXYuNTA5Yy4zNjIuMDEuNzY4LjA3MyAxLjIyMS4yMWwtLjE4MS44MjRjLS4zODQtLjEzNS0uODA4LS4yNTctMS4yMjItLjIzMi0uNzQ0LjA0My0uODEuNjg4LS4yOS45NTguODU2LjQwMiAxLjk3Mi43IDEuOTcyIDEuNzczLjAwMS44NTgtLjY3MiAxLjMxNS0xLjUgMS40MzJ6bTEuNjI0LTEwLjE3OWMxLjEzMi0uMjIzIDIuMTYyLS42MjYgMi44NzYtMS4xOTd2LjY1MmMwIC40OTktLjM4Ni45NTUtMS4wMDcgMS4zMjgtLjU4MS0uMzM3LTEuMjA4LS42LTEuODY5LS43ODN6bS0yLjEyNC01Ljc5NWMyLjY3MyAwIDUtMS4wMDcgNS0yLjI1cy0yLjMyNy0yLjI1LTUtMi4yNWMtMi42NzIgMC01IDEuMDA3LTUgMi4yNXMyLjMyOCAyLjI1IDUgMi4yNXptLjA5My0yLjAwOWMtLjI5OS0uMDktMS4yMTQtLjE2Ni0xLjIxNC0uNjc1IDAtLjI4NC4zMzQtLjUzNy45NTgtLjU5M3YtLjIyM2guMzIxdi4yMTFjLjIzNC4wMDUuNDk0LjAzLjc4NC4wOWwtLjExNi4zNDJjLS4yMjEtLjA1MS0uNDY3LS4wOTktLjcwOC0uMDk5bC0uMDcyLjAwMWMtLjQ4Mi4wMi0uNTIxLjI4Ny0uMTg4LjM5OS41NDcuMTY5IDEuMjY3LjI5MiAxLjI2Ny43NCAwIC4zNTctLjQzNC41NDgtLjk2Ny41OTZ2LjIyaC0uMzIxdi0uMjA4Yy0uMzI4LS4wMDMtLjY3Ni0uMDU2LS45NjItLjE1MmwuMTQ3LS4zNDNjLjI0NC4wNjMuNTUyLjEyNi44MjguMTI2bC4yMDgtLjAxNGMuMzY5LS4wNTMuNDQzLS4zLjAzNS0uNDE4em0tMTEuMDkzIDEzLjAwOWMxLjQ0NSAwIDIuNzc1LS4zMDEgMy43MDUtLjc2OC4zMTEtLjY5LjcxNC0xLjMyOSAxLjE5OC0xLjg5OS0uNDUxLTEuMDQzLTIuNTM5LTEuODMzLTQuOTAzLTEuODMzLTIuNjcyIDAtNSAxLjAwNy01IDIuMjVzMi4zMjggMi4yNSA1IDIuMjV6bS4wOTMtMi4wMDljLS4yOTktLjA5LTEuMjE0LS4xNjYtMS4yMTQtLjY3NSAwLS4yODQuMzM1LS41MzcuOTU4LS41OTN2LS4yMjNoLjMyMXYuMjExYy4yMzQuMDA1LjQ5NC4wMy43ODQuMDlsLS4xMTcuMzQyYy0uMjItLjA1MS0uNDY2LS4wOTktLjcwNy0uMDk5bC0uMDcyLjAwMWMtLjQ4Mi4wMi0uNTIuMjg3LS4xODguMzk5LjU0Ny4xNjkgMS4yNjcuMjkyIDEuMjY3Ljc0IDAgLjM1Ny0uNDM0LjU0OC0uOTY3LjU5NnYuMjJoLS4zMjF2LS4yMDhjLS4zMjktLjAwMy0uNjc2LS4wNTYtLjk2Mi0uMTUybC4xNDctLjM0M2MuMjQ0LjA2My41NTIuMTI2LjgyOC4xMjZsLjIwOC0uMDE0Yy4zNjgtLjA1My40NDMtLjMuMDM1LS40MTh6bTQuMDAzIDguNTMxYy0uOTE5LjU5LTIuNDQuOTc4LTQuMDk2Ljk3OC0yLjY3MiAwLTUtMS4wMDctNS0yLjI1di0uNjUyYzEuMTQ2LjkxOCAzLjEwOSAxLjQwMiA1IDEuNDAyIDEuMjM2IDAgMi40OTktLjIxMSAzLjU0OS0uNjExLjE1My4zOTQuMzM2Ljc3My41NDcgMS4xMzN6bS05LjA5Ni0zLjc3MnYtLjY1MWMxLjE0Ni45MTcgMy4xMDkgMS40MDEgNSAxLjQwMSAxLjAzOSAwIDIuMDk0LS4xNTEgMy4wMjgtLjQzNS4wMzMuNDY5LjEwNy45MjYuMjE4IDEuMzctLjg4OC4zNDctMi4wMjQuNTY1LTMuMjQ2LjU2NS0yLjY3MiAwLTUtMS4wMDctNS0yLjI1em0wLTIuNXYtLjY1MmMxLjE0Ni45MTggMy4xMDkgMS40MDIgNSAxLjQwMiAxLjEyNyAwIDIuMjc1LS4xNzYgMy4yNjYtLjUwOS0uMTI4LjQ5My0uMjEgMS4wMDItLjI0MSAxLjUyNi0uODU0LjI5OC0xLjkwMy40ODMtMy4wMjUuNDgzLTIuNjcyIDAtNS0xLjAwNy01LTIuMjV6bTExLTExdi0uNjUyYzEuMTQ2LjkxOCAzLjEwOSAxLjQwMiA1IDEuNDAyIDEuODkyIDAgMy44NTQtLjQ4NCA1LTEuNDAydi42NTJjMCAxLjI0My0yLjMyNyAyLjI1LTUgMi4yNS0yLjY3MiAwLTUtMS4wMDctNS0yLjI1em0wIDV2LS42NTJjLjcxMy41NzEgMS43NDQuOTc0IDIuODc2IDEuMTk3LS42NjEuMTgzLTEuMjg3LjQ0Ni0xLjg2OC43ODMtLjYyMi0uMzczLTEuMDA4LS44MjktMS4wMDgtMS4zMjh6bTAtMi41di0uNjUxYzEuMTQ2LjkxNyAzLjEwOSAxLjQwMSA1IDEuNDAxIDEuODkyIDAgMy44NTQtLjQ4NCA1LTEuNDAxdi42NTFjMCAxLjI0My0yLjMyNyAyLjI1LTUgMi4yNS0yLjY3MiAwLTUtMS4wMDctNS0yLjI1eiIvPjwvc3ZnPg==">
                        </div>
                        <div class="col-md-8">
                            <h5>Transparasi Anggaran</h5>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3 m-2 shadow bg-white" data-aos="fade-right">
                    <div class="row align-items-center">
                        <div class="col-md-4 align-self-center p-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNNC41NzQgMTYuOTg5Yy0xLjc2OC42NDctMy43MTktLjI3NS00LjM2NS0yLjA2LS42NDctMS43ODUuMjYyLTMuNzU3IDIuMDI3LTQuNDA0bDMuMjQyLTEuMTg3IDIuMzM4IDYuNDY0LTMuMjQyIDEuMTg3em02LjI4MiAzLjE3MmMtLjQzNy0uMTUxLS44MTQtLjQzLTEuMDg5LS44bC0xLjYzNS0yLjIwMi0zLjMwMSAxLjIwOSAyLjYwMiAzLjM1M2MuMjkyLjM3Ni43OS41MiAxLjIzNy4zNTZsMi4yMTYtLjgxYy4yMjktLjA4NC4zODItLjMwNy4zODEtLjU1My0uMDAyLS4yNDYtLjE1Ni0uNDY0LS4zODktLjU0NWwtLjAyMi0uMDA4em0tNC4wOS0xMS4yOTRsMi4zMzggNi40NjRjMi4xNTUtLjQxNyA1LjA3Ny0uNDAxIDguODk2LjQwMWwtNC42NzUtMTIuOTI3Yy0yLjQ3NiAzLjE2NS00LjY2MyA1LjAwNC02LjU1OSA2LjA2MnptMTAuNzk1LTMuMTAyYy44NTYuNDExIDEuNTU2IDEuMTQ5IDEuODkzIDIuMTE3LjMzOS45NjcuMjU0IDEuOTgtLjE1NyAyLjgzNmwxLjQwNy42NzhjLjU4NS0xLjIxNi43MDgtMi42NTYuMjI3LTQuMDMtLjQ4MS0xLjM3NS0xLjQ3NC0yLjQyNC0yLjY4OS0zLjAwOWwtLjY4MSAxLjQwOHptMS4xODgtMi40NjVjMS40ODYuNzE1IDIuNjk4IDEuOTk4IDMuMjg2IDMuNjc4cy40MzggMy40NDEtLjI3NyA0LjkyN2wxLjQ0My42OTZjLjg5My0xLjg1NyAxLjA3OS00LjA1NS4zNDYtNi4xNTMtLjczNS0yLjA5Ny0yLjI0Ny0zLjY5OC00LjEwMi00LjU5MWwtLjY5NiAxLjQ0M3oiLz48L3N2Zz4=">
                        </div>
                        <div class="col-md-8">
                            <h5>Pengumuman</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="testimoni mt-5" id="testimoni" data-aos="flip-left">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-7 align-self-center">
                    <div class="text-center">
                        <div class="mb-5">
                            <h2>Testimoni</h2>
                            <hr style="border-color: black">
                        </div>

                        <div class="mt-5">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNSIgdmlld0JveD0iMCAwIDI0IDI1Ij48cGF0aCBkPSJNMTYuNSAxMy41YzAgLjgyOC0uNTYgMS41LTEuMjUgMS41cy0xLjI1LS42NzItMS4yNS0xLjUuNTYtMS41IDEuMjUtMS41IDEuMjUuNjcyIDEuMjUgMS41em0tNy43NS0xLjVjLS42OSAwLTEuMjUuNjcyLTEuMjUgMS41cy41NiAxLjUgMS4yNSAxLjUgMS4yNS0uNjcyIDEuMjUtMS41LS41Ni0xLjUtMS4yNS0xLjV6bTE1LjI1IDIuMzEzYzAgMS43NjUtLjk4NSAzLjk5MS0zLjEzOSA0LjkwNi0yLjA2MyAzLjI5NS00Ljk4NyA1Ljc4MS04Ljg2MSA1Ljc4MS0zLjc0MSAwLTYuODQ2LTIuNTYyLTguODYxLTUuNzgxLTIuMTU0LS45MTYtMy4xMzktMy4xNDItMy4xMzktNC45MDYgMC0yLjA1My43NTQtMy4wMjYgMS40MTctMy40ODktLjM5LTEuNTI0LTEuMDMtNS4xNDYuOTYzLTcuNDA5LjkzOC0xLjA2NSAyLjQ2NC0xLjU0IDQuMTItMS4yNzQuNzE5LTEuNTMyIDMuNjEyLTIuMTQxIDUuNS0yLjE0MSAzIDAgNi42MDkuNjQxIDkuMTQxIDMuNTE2IDEuOTY5IDIuMjM2IDEuNjQ4IDUuNzQxIDEuMzg4IDcuMjY5LjY3Ni40NDYgMS40NzEgMS40MTkgMS40NzEgMy41Mjh6bS05LjYgNC42ODdoLTQuOHMuNjc4IDEuODgzIDIuNCAxLjg4M2MxLjc4OCAwIDIuNC0xLjg4MyAyLjQtMS44ODN6bTcuMDYzLTYuNTA4Yy00LjExLjM5My03Ljc3OC0zLjA1OC05LjA3My01LjI3NC0uMDgxLjgwOS4xODYgMi41NTcuOTY5IDMuMzU1LTMuMTc1LjA2NC01LjgzNS0xLjU5Mi03LjQ2LTMuODY4LS44MzcgMS4zOTktMS4yNDIgMy4wODgtMS4yNDIgNC43NzUgMCAuNzIyLS43NDYgMS4yMDgtMS40MDYuOTE0LS4xNC0uMDYzLS40MzYtLjEwMS0uNjcxLjA1My0xIC42NDgtLjg5NSA0LjE4MyAxLjU1MyA1LjAxMi4yMjQuMDc2LjQxMy4yMjguNTM2LjQzLjY1NSAxLjA4NiAxLjM1NCAxLjk4IDIuMDg2IDIuNzIyLjkyMi42MzMgMS4wNTYtMS44NzUgMS42NjctMi43Mi42ODYtLjk0OSAyLjQ1NS0xLjEyNiAzLjU3OC0uMzIyIDEuMTI0LS44MDQgMi44OTItLjYyNyAzLjU3OC4zMjIuNjExLjg0Ni43NDUgMy4zNTQgMS42NjcgMi43Mi43MzEtLjc0MSAxLjQzLTEuNjM2IDIuMDg2LTIuNzIyLjEyMy0uMjAyLjMxMy0uMzU0LjUzNi0uNDMgMi4zNjMtLjggMi41OTYtNC4xODUgMS41OTYtNC45Njd6Ii8+PC9zdmc+" data-aos="fade-up">
                            <hr style="border-color: black; width: 50%;" class="mt-5">
                            <blockquote style="border-left: none;" data-aos="fade-left">
                                <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel, facere expedita. Deserunt, nihil fugiat qui tenetur sunt placeat accusamus unde possimus illo eveniet rem, nesciunt incidunt est dicta quidem voluptate.</span>
                                <footer>
                                    <span>
                                        Mike John
                                    </span>
                                </footer>
                            </blockquote>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center align-items-center" id="row" style="padding-top: 3rem;">

                <div class="col-md-6 align-self-center" style="margin-top: 150px;" data-aos="fade-left">
                    <span>Alamat</span>
                    <hr>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                </div>

                <div class="col-md-6 align-self-center" style="margin-top: 100px;">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-3 align-self-center">
                            <img src="../web/images/icon/iconmonstr-facebook-3-48.png" alt="" style="height: 24px; width: 24px;" data-aos="fade-up">
                        </div>
                        <div class="col-md-3 align-self-center">
                            <img src="../web/images/icon/iconmonstr-instagram-13-48.png" alt="" style="height: 24px; width: 24px;" data-aos="fade-up">
                        </div>
                        <div class="col-md-3 align-self-center">
                            <img src="../web/images/icon/iconmonstr-twitter-3-48.png" alt="" style="height: 24px; width: 24px;" data-aos="fade-up">
                        </div>
                    </div>
                </div>
                <div class="text-center" style="width: 100%; margin-top: 50px;" data-aos="fade-right">
                    <hr style="border-color: white;">
                    <span>&copy 2021 <a href="https://zulfikar-dityaa.github.io/" style="color: var(--rose)">Zulfikar Ditya</a></span>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function () {
        $('body').show();
    });
</script>
