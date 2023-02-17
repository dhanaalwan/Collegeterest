import csv

def read_data():
    csv_filename = 'output.csv'
    with open(csv_filename) as f:
        reader = csv.reader(f)
        list_data = list(reader)

    for i in range(len(list_data)):
        for j in range(len(list_data[i])):
            list_data[i][j] = eval(list_data[i][j])
    return list_data

def set_up_data(data):
    data[0].insert(0,0)

    data[1].insert(0,data[0][1])
    data[1].insert(1,0)

    data[2].insert(0,data[0][2])
    data[2].insert(1,data[1][2])
    data[2].insert(2,0)

    data[3].insert(0,data[0][3])
    data[3].insert(1,data[1][3])
    data[3].insert(2,data[2][3])
    data[3].insert(3,0)

    data[4].insert(0,data[0][4])
    data[4].insert(1,data[1][4])
    data[4].insert(2,data[2][4])
    data[4].insert(3,data[3][4])
    data[4].insert(4,0)

    data[5].insert(0,data[0][5])
    data[5].insert(1,data[1][5])
    data[5].insert(2,data[2][5])
    data[5].insert(3,data[3][5])
    data[5].insert(4,data[4][5])
    data[5].insert(5,0)

    data[6].insert(0,data[0][6])
    data[6].insert(1,data[1][6])
    data[6].insert(2,data[2][6])
    data[6].insert(3,data[3][6])
    data[6].insert(4,data[4][6])
    data[6].insert(5,data[5][6])
    data[6].insert(6,0)

    data[7].insert(0,data[0][7])
    data[7].insert(1,data[1][7])
    data[7].insert(2,data[2][7])
    data[7].insert(3,data[3][7])
    data[7].insert(4,data[4][7])
    data[7].insert(5,data[5][7])
    data[7].insert(6,data[6][7])
    data[7].insert(7,0)

    data[8].insert(0,data[0][8])
    data[8].insert(1,data[1][8])
    data[8].insert(2,data[2][8])
    data[8].insert(3,data[3][8])
    data[8].insert(4,data[4][8])
    data[8].insert(5,data[5][8])
    data[8].insert(6,data[6][8])
    data[8].insert(7,data[7][8])
    data[8].insert(8,0)

    data.append([data[0][9],data[1][9],data[2][9],data[3][9],data[4][9],data[5][9],data[6][9],data[7][9],data[8][9],0])

    return data
