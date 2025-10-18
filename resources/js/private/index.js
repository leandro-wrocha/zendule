import ApexCharts from "apexcharts";

// ===== Appointments Chart
const appointmentsChart = () => {
    const chartOptions = {
        series: [
            {
                name: "Sales",
                data: [168, 385, 201, 298, 187, 195, 291, 110, 215, 390, 280, 112],
            },
        ],
        colors: ["#465fff"],
        chart: {
            fontFamily: "Outfit, sans-serif",
            type: "bar",
            height: 380,
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "42%",
                borderRadiusApplication: "end",
            }
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 4,
            colors: ["transparent"],
        },
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            axisBorder: {
                show: true,
            },
            axisTicks: {
                show: false,
            },
        },
        legend: {
            show: true,
            position: "top",
            horizontalAlign: "left",
            fontFamily: "Outfit",
            markers: {
                radius: 99,
            },
        },
        yaxis: {
            title: false,
            axisBorder: {
                show: true,
            },
            min: 0,
            max: function (max) {
                return max;
            }
        },
        grid: {
            yaxis: {
                lines: {
                    show: true,
                },
            },
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            x: {
                show: false,
            },
            y: {
                formatter: function (val) {
                    return val;
                },
            },
        },
    };

    const chartSelector = document.querySelectorAll("#appointmentsChart");

    if (chartSelector.length) {
        const apexCharts = new ApexCharts(
            document.querySelector("#appointmentsChart"),
            chartOptions,
        );
        apexCharts.render();
    }
};

export default appointmentsChart;
